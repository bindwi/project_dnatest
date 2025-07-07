<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProfileImportController extends Controller
{
    public function import(Request $request)
    {
        try {
            // 1️⃣ ambil variabel dari .env
            $clientId     = env('SELFDECODE_CLIENT_ID');
            $clientSecret = env('SELFDECODE_CLIENT_SECRET');
            $tokenUrl     = env('SELFDECODE_TOKEN_URL');
            $apiUrl       = env('SELFDECODE_API_URL');

            \Log::info('TOKEN URL: ' . $tokenUrl);
            \Log::info('API URL: ' . $apiUrl);
            \Log::info('CLIENT_ID: ' . $clientId);

            // 2️⃣ ambil access token
            $tokenResponse = Http::asForm()->post($tokenUrl, [
                'grant_type'    => 'client_credentials',
                'client_id'     => $clientId,
                'client_secret' => $clientSecret,
            ]);

            if (!$tokenResponse->successful()) {
                \Log::error('Failed to get access token', [
                    'response' => $tokenResponse->body()
                ]);
                return redirect('/import')
                    ->with('error', 'Gagal mendapatkan access token: ' . $tokenResponse->body());
            }

            $accessToken = $tokenResponse->json()['access_token'] ?? null;

            if (!$accessToken) {
                return redirect('/import')->with('error', 'Access token tidak tersedia di response.');
            }

            // 3️⃣ panggil API profile
            $apiResponse = Http::withToken($accessToken)
                ->get($apiUrl);

            if (!$apiResponse->successful()) {
                \Log::error('Failed fetching profiles', [
                    'status' => $apiResponse->status(),
                    'body'   => $apiResponse->body()
                ]);
                return redirect('/import')
                    ->with('error', 'Gagal mengambil data profil: ' . $apiResponse->status());
            }

            $profiles = $apiResponse->json();

            // 4️⃣ validasi data profiles
            if (!is_array($profiles)) {
                \Log::error('Unexpected API response format', ['response' => $profiles]);
                return redirect('/import')
                    ->with('error', 'Format data profil tidak sesuai.');
            }

            // 5️⃣ simpan ke database
            foreach ($profiles as $profileData) {
                if (empty($profileData['id'])) {
                    \Log::warning('Profile data missing id, skipped.', $profileData);
                    continue;
                }

                Profile::updateOrCreate(
                    ['api_id' => $profileData['id']],
                    [
                        'name'           => $profileData['name']         ?? null,
                        'email'          => $profileData['email']        ?? null,
                        'ethnicity'      => $profileData['ethnicity']    ?? null,
                        'sex'            => $profileData['sex']          ?? null,
                        'birth_year'     => $profileData['birth_year']   ?? null,
                        'created_at_api' => $profileData['created_at']   ?? null,
                    ]
                );
            }

            return redirect('/import')
                ->with('success', 'Profiles berhasil diimpor.');
        } catch (\Throwable $e) {
            \Log::error('Import error: ' . $e->getMessage());
            return redirect('/import')
                ->with('error', 'Terjadi error: ' . $e->getMessage());
        }
    }
}
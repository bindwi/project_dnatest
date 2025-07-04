<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Profile;

class ProfileImportController extends Controller
{
    public function __invoke()
    {
        $apiUrl = config('services.selfdecode.base_url') . '/profile/';

        // Request ke API pakai token dari config
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . config('services.selfdecode.token'),
            'Accept' => 'application/json',
        ])->get($apiUrl);

        if (!$response->successful()) {
            return response()->json([
                'message' => 'Gagal mengambil data dari API',
                'error' => $response->body(),
            ], $response->status());
        }

        // Ambil data profile dari API
        $profiles = $response->json();

        // Pastikan response API berbentuk array
        if (!is_array($profiles)) {
            return response()->json([
                'message' => 'Data dari API bukan array. Ini isi data yang diterima:',
                'response' => $profiles,
            ], 500);
        }

        foreach ($profiles as $profileData) {
            Profile::updateOrCreate(
                [
                    'api_id' => $profileData['id'] ?? null,
                ],
                [
                    'name'           => $profileData['name'] ?? null,
                    'email'          => $profileData['email'] ?? null,
                    'ethnicity'      => $profileData['ethnicity'] ?? null,
                    'sex'            => $profileData['sex'] ?? null,
                    'birth_year'     => $profileData['birth_year'] ?? null,
                    'created_at_api' => $profileData['created_at'] ?? null,
                ]
            );
        }

        return response()->json([
            'message' => 'Data profil berhasil diambil dan disimpan',
            'count'   => count($profiles),
        ]);
    }
}

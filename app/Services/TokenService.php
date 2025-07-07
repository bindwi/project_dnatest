<?php

namespace App\Services;

use App\Models\Token;
use Illuminate\Support\Facades\Http;

class TokenService
{
   public function getAccessToken()
{
    $accessToken = Token::first();

    if (!$accessToken || now()->greaterThanOrEqualTo($accessToken->expired_at)) {
        $response = Http::post(env('SELF_DECODE_TOKEN_URL'), [
            // isi param jika ada
        ]);

        if ($response->successful()) {
            $data = $response->json();
            $newToken = $data['access_token'];
            $expiresIn = $data['expires_in']; // 172800 detik

            Token::updateOrCreate(
                ['id' => $accessToken?->id],
                [
                    'token' => $newToken,
                    'expired_at' => now()->addSeconds($expiresIn)
                ]
            );

            return $newToken;
        } else {
            throw new \Exception('Gagal mengambil token Bearer');
        }
    }

    return $accessToken->token;
}


}


<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Models\InstagramToken;

class Instagram extends Command
{

    protected $signature = 'instagram:refresh';


    protected $description = 'Instagram access token update';



    public function handle()
    {
        info("Cron Job Instagram running at " . now());

        $baseUrl = "https://graph.instagram.com/refresh_access_token?";

        $instagramToken = InstagramToken::select('access_token')->latest()->first();
        $accessToken = config('instagram_token');

        if ($instagramToken && $instagramToken->access_token) {
            $accessToken = $instagramToken->access_token;
        } else {
            // Jika tidak ada token di database, gunakan nilai default dari konfigurasi
            $accessToken = config('instagram_token');
        }

        $params = array(
            'grant_type' => 'ig_refresh_token',
            'access_token' => $accessToken
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $baseUrl . http_build_query($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $responseText = curl_exec($ch);
        $result = json_decode($responseText, true);

        curl_close($ch);


        if ($result && isset($result['access_token'])) {
            $newAccessToken = $result['access_token'];

            $instagramToken = new InstagramToken();
            $instagramToken->access_token = $newAccessToken;
            $instagramToken->token_type = $result['token_type'];
            $instagramToken->expires_in = $result['expires_in'];
            $instagramToken->save();
            // Lanjutkan dengan logika Anda
            // ...
        } else {
            $this->error('Failed to get access token from Instagram API.');
        }
        
    }
}

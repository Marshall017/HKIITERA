<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\InstagramToken; // Pastikan Anda menggunakan namespace yang benar

class InstagramController extends Controller
{
    public function index()
    {
        $baseUrl = "https://graph.instagram.com/me/media?";
        $instagramToken = InstagramToken::select('access_token')->latest()->first();
        $accessToken = env('INSTAGRAM_TOKEN');

        if ($instagramToken && $instagramToken->access_token) {
            $accessToken = $instagramToken->access_token;
        }

        $params = array(
            'fields' => implode(',', array('id', 'username', 'caption', 'permalink', 'media_url', 'media_type')),
            'access_token' => $accessToken,
            'limit' => 9
        );

        $url = $baseUrl . http_build_query($params);
        // $result = $this->makeCurlRequest($url);
        $result = Http::get($url);
        $data = $result->json();

        // error_log("Result Variable: ". json_encode($data));
        return view('instagram', [
            'mediaData' => $data['data'] ?? [], // Menambahkan ?? [] untuk menangani nilai null
            'paging' => $data['paging'] ?? [] // Menambahkan ?? [] untuk menangani nilai null
        ]);
        
    }

    public function detailMedia($id)
    {
        try {
            $instagramToken = InstagramToken::select('access_token')->latest()->first();
            $accessToken = env('INSTAGRAM_TOKEN');

            if ($instagramToken && $instagramToken->access_token) {
                $accessToken = $instagramToken->access_token;
            }

            $mediaId = $id;
            $urlGetAllMediaId = 'https://graph.instagram.com/' . $mediaId . '/children?access_token=' . $accessToken;
            $result = $this->makeCurlRequest($urlGetAllMediaId);

            if (count($result['data']) != 0) {
                $resultMediaUrl = [];

                foreach ($result['data'] as $value) {
                    $idMediaSpecific = $value['id'];
                    $urlSpecificMedia = 'https://graph.instagram.com/' . $idMediaSpecific . '?fields=id,media_url,media_type&access_token=' . $accessToken;
                    $resultSpecificMedia = $this->makeCurlRequest($urlSpecificMedia);

                    $resultMediaUrl[] = [
                        'media_url_of' => $resultSpecificMedia['media_url'],
                        'media_type_of' => $resultSpecificMedia['media_type']
                    ];
                }

                $urlMediaById = 'https://graph.instagram.com/' . $mediaId . '?fields=id,media_type,media_url&access_token=' . $accessToken;
                $resultMedia = $this->makeCurlRequest($urlMediaById);
                $resultMedia['media_url'] = $resultMediaUrl;
            } else {
                $urlMediaById = 'https://graph.instagram.com/' . $mediaId . '?fields=id,media_type,media_url&access_token=' . $accessToken;
                $resultMedia = $this->makeCurlRequest($urlMediaById);
                $resultMediaUrl[] = [
                    'media_url_of' => $resultMedia['media_url'],
                    'media_type_of' => $resultMedia['media_type']
                ];
                $resultMedia['media_url'] = $resultMediaUrl;
            }

            return response()->json(['items' => $resultMedia]);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Terjadi kesalahan dalam mengambil data media.']);
        }
    }

    private function makeCurlRequest($url)
    {
        // Tambahkan implementasi fungsi cURL Anda di sini
    }
}

<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Inertia\Inertia;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;

trait Api
{
    protected function get($url, $data = [])
    {
        $token = Cookie::get('auth_token');
        if (!$token) {
            // throw new \Exception("User token not found");
            abort(401, 'Unauthorized');
        }

        // dd($token, $url, $data);

        $response = Http::withToken($token)
            ->asJson()
            ->acceptJson()
            ->timeout(60)->get($url, $data);
        // dd($response->object());
        return $response;
    }

    protected function post($url, $data = [], $requiresAuth = true)
    {
        if ($requiresAuth) {
            $token = Cookie::get('auth_token');
            if (!$token) {
                abort(401, 'Unauthorized');
            }
            return Http::withToken($token)
                ->asJson()
                ->acceptJson()
                ->timeout(60)
                ->post($url, $data);
        } else {
            return Http::asJson()
                ->acceptJson()
                ->timeout(60)
                ->post($url, $data);
        }
    }

    protected function postRegister($url, $data = [])
    {
        $response = Http::asJson()
            ->acceptJson()
            ->timeout(60)
            ->post($url, $data);
        return $response;
    }

    protected function patch($url, $data = [])
    {
        $token = Cookie::get('auth_token');

        if (!$token) {
            // throw new \Exception("User token not found");
            abort(401, 'Unauthorized');
        }

        $response = Http::withToken($token)
            ->asJson()
            ->acceptJson()
            ->timeout(60)->patch($url, $data);
        return $response;
    }



    protected function remove($url, $data = [])
    {
        $token = Cookie::get('auth_token');

        if (!$token) {
            throw new \Exception("User token not found in session");
        }
        $response = Http::withToken($token)
            ->timeout(60)
            ->asJson()
            ->acceptJson()
            ->delete($url, $data);
        // dd($url, $data, $response);

        return $response;
    }




    protected function signOut($url)
    {
        $token = Cookie::get('auth_token');
        $response = Http::withToken($token)->timeout(60)
            ->asJson()
            ->acceptJson()
            ->post($url);
        // Log::channel('kedebah_api')->info('LOGOUT RESPONSE', $response->json());

        return new JsonResponse($response->json(), $response->status());
    }
}

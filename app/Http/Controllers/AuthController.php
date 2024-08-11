<?php

namespace App\Http\Controllers;

use App\Traits\Api;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use Api;

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'address' => 'required',
            'phone' => 'required'
        ]);

        if ($validator->fails()) {
            return new JsonResponse(['errors' => $validator->errors()], 422);
        }

        $response = $this->postRegister(config('services.ehub.auth_service_url') . '/register', $request->all());
        // dd($request->all(), $response->json());

        return new JsonResponse($response->json(), $response->status());
    }


    public function login(Request $request)
    {
        Log::info('Login attempt', $request->all());

        try {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            Log::info('Credentials validated', $credentials);

            $response = $this->post(config('services.ehub.auth_service_url') . '/login', $credentials, false);

            Log::info('API response', ['status' => $response->status(), 'body' => $response->body()]);

            if ($response->successful()) {
                $data = $response->json();

                // Check if 'data' key exists and contains 'token' and 'user'
                if (isset($data['data']['token']) && isset($data['data']['user'])) {
                    $token = $data['data']['token'];
                    $user = $data['data']['user'];

                    Cookie::queue('auth_token', $token, 60 * 24 * 30);
                    return response()->json(['user' => $user, 'token' => $token], 200);
                } else {
                    Log::error('Unexpected response structure', $data);
                    return response()->json(['message' => 'Unexpected response from server'], 500);
                }
            } else {
                return response()->json(['message' => 'Invalid credentials'], 401);
            }
        } catch (\Exception $e) {
            Log::error('Login error', ['message' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            return response()->json(['message' => 'An error occurred during login'], 500);
        }
    }


    public function logout(Request $request)
    {
        $response = $this->post(config('services.ehub.auth_service_url') . '/logout');

        if ($response->successful()) {
            Cookie::queue(Cookie::forget('auth_token'));
            return response()->json(['message' => 'Logged out successfully'], 200);
        } else {
            return response()->json(['message' => 'Logout failed'], 500);
        }
    }

    public function user()
    {
        $response = $this->get(config('services.ehub.auth_service_url') . '/user');

        return new JsonResponse($response->json(), $response->status());

    }
}

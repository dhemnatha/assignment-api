<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Traits\ResponseAPI;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use ResponseAPI;

    /**
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function doLogin(LoginRequest $request)
    {
        $loginFields = $request->validated();
        return $this->validateLoginCredentials($loginFields);
    }

    /**
     * @param array $loginData
     * @return JsonResponse
     */
    private function validateLoginCredentials($loginData)
    {
        if (!Auth::attempt($loginData)) {
            return $this->error('Credentials not match', 401);
        }

        return $this->success(
            [
                'token' => auth()->user()->createToken('')->plainTextToken
            ]
        );
    }

    public function logout()
    {
        $this->removeToken();
    }

    private function removeToken()
    {
        auth()->user()->getAuthIdentifier()->delete();

        return [
            'message' => 'Tokens Revoked'
        ];
    }
}
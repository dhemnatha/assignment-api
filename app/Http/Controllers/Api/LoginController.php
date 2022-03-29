<?php

namespace App\Http\Controllers\Api;

use App\Traits\ResponseAPI;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use ResponseAPI;

    /**
     * Login action.
     *
     * @param  $request
     * @return Token or error
     */
    public function login(LoginRequest $request)
    {

        $loginFields = $request->validated();
        return $this->validateCredentials($loginFields);

    }

    public function logout()
    {
        $this->removeToken();
    }

    private function removeToken()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Tokens Revoked'
        ];
    }

    /**
     * Return an error or success response.
     *
     * @param  array  $loginData
     * @param  array|string|null  $data
     * @return Error or Success
     */
    private function validateCredentials($loginData){
        if (!Auth::attempt($loginData)) {
            return $this->error('Credentials not match', 401);
        }

        return $this->success([
            'token' => auth()->user()->createToken('')->plainTextToken
        ]);

    }
}

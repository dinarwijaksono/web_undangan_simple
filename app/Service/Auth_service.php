<?php

namespace App\Service;

use Illuminate\Http\Request;

class Auth_service
{
    public function login(Request $request): bool
    {
        $username = 'dinar';
        $password = 'rahasia';

        if ($username == $request->username && $password == $request->password) {
            session()->put('login-status', "login-true");
            return true;
        }

        return false;
    }


    public function logout()
    {
        session()->forget('login-status');
    }
}

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
            session()->put('username', $username);
            return true;
        }

        return false;
    }
}

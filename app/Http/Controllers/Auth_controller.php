<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\Auth_service;

class Auth_controller extends Controller
{
    public $authService;

    public function __construct(Auth_service $authService)
    {
        $this->authService = $authService;
    }



    public function login()
    {
        return view('/Auth/login');
    }


    public function doLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $login = $this->authService->login($request);

        if ($login) {
            return redirect('Dashboard/index');
        } else {
            return redirect()->back()->with('loginFailed', "Login gagal.");
        }
    }


    public function logout()
    {
        $this->authService->logout();

        return redirect('/Auth/login');
    }
}

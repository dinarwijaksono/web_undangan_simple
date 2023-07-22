<?php

namespace Tests\Feature\Service;

use App\Service\Auth_service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Tests\TestCase;

class AuthService_Test extends TestCase
{
    public $authService;

    public function setUp(): void
    {
        parent::setUp();

        $this->authService = $this->app->make(Auth_service::class);
    }

    public function test_loginTrue()
    {
        $request = new Request();
        $request['username'] = 'dinar';
        $request['password'] = 'rahasia';

        $response = $this->authService->login($request);

        $this->assertTrue($response);
    }


    public function test_loginUsernameAndPasswordIsEmpty()
    {
        $request = new Request();
        $request['username'] = '';
        $request['password'] = '';

        $response = $this->authService->login($request);

        $this->assertFalse($response);
    }


    public function test_loginWrongUsername()
    {
        $request = new Request();
        $request['username'] = 'dinarrrr';
        $request['password'] = 'rahasia';

        $response = $this->authService->login($request);

        $this->assertFalse($response);
    }


    public function test_loginWrongPassword()
    {
        $request = new Request();
        $request['username'] = 'dinar';
        $request['password'] = 'rahasiaaaaaa';

        $response = $this->authService->login($request);

        $this->assertFalse($response);
    }
}

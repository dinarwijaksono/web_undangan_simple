<?php

namespace Tests\Feature\Service;

use App\Service\Confirmation_service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Tests\TestCase;

class ConfirmationService_Test extends TestCase
{
    protected $confimationService;

    public function setUp(): void
    {
        parent::setUp();

        config(['database.default' => 'mysql-test']);

        $this->confimationService = $this->app->make(Confirmation_service::class);
    }


    public function test_create()
    {
        $request = new Request();
        $request['productCode'] = 'Test-1';
        $request['name'] = 'example-' . mt_rand(1, 9999);
        $request['confirmation'] = 'Belum pasti';
        $request['message'] = 'selamat ya kalian berdua, ' . mt_rand(1, 9999);

        $this->confimationService->create($request);

        $this->assertDatabaseHas('confirmation_of_attendances', [
            'product_code' => $request->productCode,
            'name' => $request->name,
            'confirmation' => $request->confirmation,
            'message' => $request->message,
        ]);
    }
}

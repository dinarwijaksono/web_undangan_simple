<?php

namespace Tests\Feature\Repository;

use App\Domain\Confirmation_domain;
use App\Repository\Confirmation_repository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfirmationRepository_Test extends TestCase
{
    protected $confirmationRepository;

    public function setUp(): void
    {
        parent::setUp();

        config(['database.default' => 'mysql-test']);

        $this->confirmationRepository = $this->app->make(Confirmation_repository::class);
    }

    public function test_create()
    {
        $confirmation = new Confirmation_domain();
        $confirmation->productCode = 'test-repo';
        $confirmation->name = 'example-' . mt_rand(1, 9999);
        $confirmation->confirmation = 'Belum pasti';
        $confirmation->message = 'selamat ya, ' . mt_rand(1, 9999);

        $this->confirmationRepository->create($confirmation);

        $this->assertDatabaseHas('confirmation_of_attendances', [
            'product_code' => $confirmation->productCode,
            'name' => $confirmation->name,
            'confirmation' => $confirmation->confirmation,
            'message' => $confirmation->message,
        ]);
    }


    public function test_getByProductCode()
    {
        $confirmation = new Confirmation_domain();
        $confirmation->productCode = 'test-repo';
        $confirmation->name = 'example-' . mt_rand(1, 9999);
        $confirmation->confirmation = 'Belum pasti';
        $confirmation->message = 'selamat ya, ' . mt_rand(1, 9999);

        $this->confirmationRepository->create($confirmation);

        $response = $this->confirmationRepository->getByProductCodeWithLimit($confirmation->productCode);

        $this->assertIsObject($response);
        $this->assertNotEmpty($response);

        // dd($response);
    }
}

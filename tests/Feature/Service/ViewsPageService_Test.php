<?php

namespace Tests\Feature\Service;

use App\Service\ViewsPage_service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewsPageService_Test extends TestCase
{
    protected $viewPage_service;

    public function setUp(): void
    {
        parent::setUp();

        config(['database.default' => 'mysql-test']);

        $this->viewPage_service = $this->app->make(ViewsPage_service::class);
    }

    public function test_create_success()
    {
        $pageCode = 'page-' . mt_rand(1, 999);
        $userAgent = 'example-' . mt_rand(1, 100);

        $this->viewPage_service->create($pageCode, $userAgent);

        $this->assertDatabaseHas('views_pages', [
            'page_code' => $pageCode,
            'user_agent' => $userAgent,
        ]);
    }
}

<?php

namespace Tests\Feature\Service;

use App\Service\ViewsPage_service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\objectHasAttribute;

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


    public function test_getPageByCode()
    {
        $pageCode = 'page-' . mt_rand(1, 10);
        $userAgent = 'example-' . mt_rand(1, 100);

        $this->viewPage_service->create($pageCode, $userAgent);
        $this->viewPage_service->create($pageCode, $userAgent);
        $this->viewPage_service->create($pageCode, $userAgent);

        $response = $this->viewPage_service->getPageByCode($pageCode);

        $this->assertIsObject($response);
        $this->assertIsArray($response->first());
        $this->assertTrue(key_exists('page_code', $response->first()));
        $this->assertTrue(key_exists('user_agent', $response->first()));
        $this->assertTrue(key_exists('time', $response->first()));
        $this->assertTrue(key_exists('date', $response->first()));

        // dd($response);
    }
}

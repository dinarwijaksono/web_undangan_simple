<?php

namespace Tests\Feature\Repository;

use App\Repository\ViewsPage_repository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewsPageReposotory_Test extends TestCase
{
    protected $viewsPage_repository;

    public function setUp(): void
    {
        parent::setUp();

        config(['database.default' => 'mysql-test']);

        $this->viewsPage_repository = $this->app->make(ViewsPage_repository::class);
    }

    public function test_create_success()
    {
        $pageCode = 'page-' . mt_rand(1, 99999);
        $userAgent = 'test-' . mt_rand(1, 5);

        $this->viewsPage_repository->create($pageCode, $userAgent);

        $this->assertDatabaseHas('views_pages', [
            'page_code' => $pageCode,
            'user_agent' => $userAgent
        ]);
    }
}

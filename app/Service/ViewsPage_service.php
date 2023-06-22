<?php

namespace App\Service;

use App\Repository\ViewsPage_repository;

class ViewsPage_service
{
    protected $ViewsPage_repository;

    public function __construct(ViewsPage_repository $viewsPage_repository)
    {
        $this->ViewsPage_repository = $viewsPage_repository;
    }

    public function create(string $pageCode, string $userAgent): void
    {
        $this->ViewsPage_repository->create($pageCode, $userAgent);
    }
}

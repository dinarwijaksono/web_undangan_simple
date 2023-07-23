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


    public function getpageByCode(string $pageCode): object
    {
        $page = collect([]);

        $result = $this->ViewsPage_repository->getpageByCode($pageCode);

        foreach ($result as $row) {
            $page->push([
                'page_code' => $row->page_code,
                'user_agent' => $row->user_agent,
                'time' => date('G:i:s', $row->created_at / 1000),
                'date' => date('j-n-Y', $row->created_at / 1000)
            ]);
        }

        return $page;
    }

    public function getViewsCount(): object
    {
        return $this->ViewsPage_repository->getViewsCount();
    }
}

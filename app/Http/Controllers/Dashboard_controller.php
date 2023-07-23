<?php

namespace App\Http\Controllers;

use App\Service\ViewsPage_service;
use Illuminate\Http\Request;

class Dashboard_controller extends Controller
{
    public $viewsPage_service;

    public function __construct(ViewsPage_service $viewsPage_service)
    {
        $this->viewsPage_service = $viewsPage_service;
    }




    public function index()
    {
        $data['pageCount'] = $this->viewsPage_service->getViewsCount();

        return view('Dashboard/index', $data);
    }


    public function showPageDetail(string $pageCode)
    {
        $data['pageCode'] = $pageCode;
        $data['pageDetail'] = $this->viewsPage_service->getpageByCode($pageCode);

        return view('/Dashboard/showDetailPage', $data);
    }
}

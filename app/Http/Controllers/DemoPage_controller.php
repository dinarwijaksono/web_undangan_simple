<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service\ViewsPage_service;

class DemoPage_controller extends Controller
{
    protected $viewPageService;

    function __construct(ViewsPage_service $viewPageService)
    {
        $this->viewPageService = $viewPageService;
    }

    public function tema_1()
    {
        $userAgent = $_SERVER['HTTP_USER_AGENT'];

        $data['pageCode'] = 'tema-1';

        $this->viewPageService->create($data['pageCode'], $userAgent);

        return view('DemoPage/tema_1', $data);
    }
}

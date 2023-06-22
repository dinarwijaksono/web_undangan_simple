<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service\ViewsPage_service;

class Home_controller extends Controller
{
    protected $viewsPageService;

    public function __construct(ViewsPage_service $viewsPageService)
    {
        $this->viewsPageService = $viewsPageService;
    }

    public function index()
    {
        $userAgent = 'other';

        if (isset($_SERVER['HTTP_USER_AGENT'])) {
            $userAgent = $_SERVER['HTTP_USER_AGENT'];
        }

        $this->viewsPageService->create('home-index', $userAgent);

        return view('Home/index');
    }
}

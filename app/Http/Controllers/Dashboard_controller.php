<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard_controller extends Controller
{
    public function index()
    {
        return view('Dashboard/index');
    }
}

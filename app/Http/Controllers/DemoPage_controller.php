<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoPage_controller extends Controller
{
    public function tema_1()
    {
        return view('DemoPage/tema_1');
    }
}

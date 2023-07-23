<?php

use App\Http\Controllers\Auth_controller;
use App\Http\Controllers\Dashboard_controller;
use App\Http\Controllers\DemoPage_controller;
use App\Http\Controllers\Home_controller;
use App\Http\Middleware\GuestOnly_middleware;
use App\Http\Middleware\MemberOnly_middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Home_controller */

Route::get('/', [Home_controller::class, 'index']);
/* end Home_controller */


/* DemoPage_controller */
Route::get('/Demo/tema_1', [DemoPage_controller::class, 'tema_1']);
/* end DemoPage_controller */


/* Auth_controller */
Route::get('/login', [Auth_controller::class, 'login'])->middleware(GuestOnly_middleware::class);

Route::get('/Auth/login', [Auth_controller::class, 'login'])->middleware(GuestOnly_middleware::class);

Route::post('/Auth/login', [Auth_controller::class, 'doLogin'])->middleware(GuestOnly_middleware::class);

Route::post('/Auth/logout', [Auth_controller::class, 'logout']);
/* end Auth_controller */

/* dashboard_controller */
Route::get('/Dashboard/index', [Dashboard_controller::class, 'index'])->middleware(MemberOnly_middleware::class);

Route::get('/Dashboard/showPageDetail/{pageCode}', [Dashboard_controller::class, 'showPageDetail'])->middleware(MemberOnly_middleware::class);
/* end dashboard_controller */
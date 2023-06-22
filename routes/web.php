<?php

use App\Http\Controllers\DemoPage_controller;
use App\Http\Controllers\Home_controller;
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

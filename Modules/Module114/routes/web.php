<?php

use Illuminate\Support\Facades\Route;
use Modules\Module114\Http\Controllers\Module114Controller;

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

Route::group([], function () {
    Route::resource('module114', Module114Controller::class)->names('module114');
});

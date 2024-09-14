<?php

use Illuminate\Support\Facades\Route;
use Modules\Module21\Http\Controllers\Module21Controller;

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
    Route::resource('module21', Module21Controller::class)->names('module21');
});

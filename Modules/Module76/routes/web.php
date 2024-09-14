<?php

use Illuminate\Support\Facades\Route;
use Modules\Module76\Http\Controllers\Module76Controller;

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
    Route::resource('module76', Module76Controller::class)->names('module76');
});

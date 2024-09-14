<?php

use Illuminate\Support\Facades\Route;
use Modules\Module65\Http\Controllers\Module65Controller;

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
    Route::resource('module65', Module65Controller::class)->names('module65');
});

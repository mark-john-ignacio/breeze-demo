<?php

use Illuminate\Support\Facades\Route;
use Modules\Module66\Http\Controllers\Module66Controller;

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
    Route::resource('module66', Module66Controller::class)->names('module66');
});

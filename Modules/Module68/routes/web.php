<?php

use Illuminate\Support\Facades\Route;
use Modules\Module68\Http\Controllers\Module68Controller;

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
    Route::resource('module68', Module68Controller::class)->names('module68');
});

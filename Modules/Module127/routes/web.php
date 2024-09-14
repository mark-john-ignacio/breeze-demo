<?php

use Illuminate\Support\Facades\Route;
use Modules\Module127\Http\Controllers\Module127Controller;

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
    Route::resource('module127', Module127Controller::class)->names('module127');
});

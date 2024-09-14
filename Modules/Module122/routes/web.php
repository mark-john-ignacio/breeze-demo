<?php

use Illuminate\Support\Facades\Route;
use Modules\Module122\Http\Controllers\Module122Controller;

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
    Route::resource('module122', Module122Controller::class)->names('module122');
});

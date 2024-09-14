<?php

use Illuminate\Support\Facades\Route;
use Modules\Module125\Http\Controllers\Module125Controller;

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
    Route::resource('module125', Module125Controller::class)->names('module125');
});

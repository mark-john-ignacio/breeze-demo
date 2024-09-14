<?php

use Illuminate\Support\Facades\Route;
use Modules\Module115\Http\Controllers\Module115Controller;

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
    Route::resource('module115', Module115Controller::class)->names('module115');
});

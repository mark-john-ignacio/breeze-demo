<?php

use Illuminate\Support\Facades\Route;
use Modules\Module3\Http\Controllers\Module3Controller;

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
    Route::resource('module3', Module3Controller::class)->names('module3');
});

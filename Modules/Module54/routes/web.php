<?php

use Illuminate\Support\Facades\Route;
use Modules\Module54\Http\Controllers\Module54Controller;

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
    Route::resource('module54', Module54Controller::class)->names('module54');
});

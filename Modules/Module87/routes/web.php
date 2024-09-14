<?php

use Illuminate\Support\Facades\Route;
use Modules\Module87\Http\Controllers\Module87Controller;

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
    Route::resource('module87', Module87Controller::class)->names('module87');
});

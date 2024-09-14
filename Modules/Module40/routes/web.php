<?php

use Illuminate\Support\Facades\Route;
use Modules\Module40\Http\Controllers\Module40Controller;

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
    Route::resource('module40', Module40Controller::class)->names('module40');
});

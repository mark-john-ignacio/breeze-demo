<?php

use Illuminate\Support\Facades\Route;
use Modules\Module75\Http\Controllers\Module75Controller;

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
    Route::resource('module75', Module75Controller::class)->names('module75');
});

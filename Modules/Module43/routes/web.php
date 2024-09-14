<?php

use Illuminate\Support\Facades\Route;
use Modules\Module43\Http\Controllers\Module43Controller;

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
    Route::resource('module43', Module43Controller::class)->names('module43');
});

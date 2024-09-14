<?php

use Illuminate\Support\Facades\Route;
use Modules\Module6\Http\Controllers\Module6Controller;

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
    Route::resource('module6', Module6Controller::class)->names('module6');
});

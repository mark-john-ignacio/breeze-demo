<?php

use Illuminate\Support\Facades\Route;
use Modules\Module15\Http\Controllers\Module15Controller;

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
    Route::resource('module15', Module15Controller::class)->names('module15');
});

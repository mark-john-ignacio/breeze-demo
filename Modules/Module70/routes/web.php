<?php

use Illuminate\Support\Facades\Route;
use Modules\Module70\Http\Controllers\Module70Controller;

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
    Route::resource('module70', Module70Controller::class)->names('module70');
});

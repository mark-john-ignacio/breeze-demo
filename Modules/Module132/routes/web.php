<?php

use Illuminate\Support\Facades\Route;
use Modules\Module132\Http\Controllers\Module132Controller;

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
    Route::resource('module132', Module132Controller::class)->names('module132');
});

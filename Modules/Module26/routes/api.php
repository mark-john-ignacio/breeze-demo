<?php

use Illuminate\Support\Facades\Route;
use Modules\Module26\Http\Controllers\Module26Controller;

/*
 *--------------------------------------------------------------------------
 * API Routes
 *--------------------------------------------------------------------------
 *
 * Here is where you can register API routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * is assigned the "api" middleware group. Enjoy building your API!
 *
*/

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('module26', Module26Controller::class)->names('module26');
});

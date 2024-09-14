<?php

use Illuminate\Support\Facades\Route;
use Modules\Mobiles\Http\Controllers\Api\V1\MobilesController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::ApiResource('mobiles', MobilesController::class, ['as' => 'api.v1']);
});
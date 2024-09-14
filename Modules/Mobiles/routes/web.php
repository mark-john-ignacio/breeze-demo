<?php

use Illuminate\Support\Facades\Route;
use Modules\Mobiles\Http\Controllers\MobilesController;

Route::middleware('auth')->group(function() {
    Route::resource('mobiles', MobilesController::class)->names('mobiles');
});

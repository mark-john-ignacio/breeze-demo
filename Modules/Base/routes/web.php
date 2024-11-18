<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use Modules\Base\Http\Controllers\BaseController;

Volt::route('/contact', 'base.contact');
Route::get('/dashboard', [BaseController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

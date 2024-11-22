<?php

use App\Http\Controllers\SupplementController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SupplementController::class, 'index'])->name('supplements.index');

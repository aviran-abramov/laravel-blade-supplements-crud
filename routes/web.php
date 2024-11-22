<?php

use App\Http\Controllers\SupplementController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SupplementController::class, 'index'])->name('supplements.index');

Route::get('/create', [SupplementController::class, 'create'])->name('supplements.create');
Route::post('/', [SupplementController::class, 'store'])->name('supplements.store');

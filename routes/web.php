<?php

use App\Http\Controllers\SupplementController;
use Illuminate\Support\Facades\Route;

Route::get('/supplements', [SupplementController::class, 'index'])->name('supplements.index');

Route::get('/supplements/create', [SupplementController::class, 'create'])->name('supplements.create');
Route::post('/supplements', [SupplementController::class, 'store'])->name('supplements.store');

Route::get('/supplements/{id}/edit', [SupplementController::class, 'edit'])->name('supplements.edit');
Route::patch('/supplements/{id}', [SupplementController::class, 'update'])->name('supplement->update');

Route::delete('/supplements/{id}', [SupplementController::class, 'destroy'])->name('supplement.destroy');

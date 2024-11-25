<?php

use App\Http\Controllers\SupplementController;
use Illuminate\Support\Facades\Route;

Route::prefix('supplements')->group(function () {
    Route::get('/', [SupplementController::class, 'index'])->name('supplements.index');

    Route::get('/{id}', [SupplementController::class, 'show'])->name('supplements.show');

    Route::get('/create', [SupplementController::class, 'create'])->name('supplements.create');
    Route::post('/', [SupplementController::class, 'store'])->name('supplements.store');

    Route::get('/{id}/edit', [SupplementController::class, 'edit'])->name('supplements.edit');
    Route::patch('/{id}', [SupplementController::class, 'update'])->name('supplement->update');

    Route::delete('/{id}', [SupplementController::class, 'destroy'])->name('supplement.destroy');
});



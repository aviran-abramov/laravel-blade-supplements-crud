<?php

use App\Http\Controllers\SupplementController;
use Illuminate\Support\Facades\Route;

Route::controller(SupplementController::class)
    ->prefix('supplements')
    ->group(function () {
        Route::get('/', 'index')->name('supplements.index');

        Route::get('/create', 'create')->name('supplements.create');
        Route::post('/', 'store')->name('supplements.store');

        Route::get('/{supplement}', 'show')->name('supplements.show');

        Route::get('/{supplement}/edit', 'edit')->name('supplements.edit');
        Route::patch('/{supplement}', 'update')->name('supplements.update');

        Route::delete("/{supplement}", 'destroy')->name('supplements.destroy');
    });



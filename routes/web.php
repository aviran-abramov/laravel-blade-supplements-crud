<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SupplementController;
use Illuminate\Support\Facades\Route;

Route::resource('supplements', SupplementController::class)->names([
    'index' => 'supplements.index',
    'create' => 'supplements.create',
    'store' => 'supplements.store',
    'show' => 'supplements.show',
    'edit' => 'supplements.edit',
    'update' => 'supplements.update',
    'delete' => 'supplements.delete',
]);

Route::redirect('/', '/supplements');

// Auth
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register.create');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');

Route::get('/login', [SessionController::class, 'create'])->name('session.create');
Route::post('/login', [SessionController::class, 'store'])->name('session.store');
Route::post('/logout', [SessionController::class, 'destroy'])->name('session.destroy');



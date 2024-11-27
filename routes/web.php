<?php

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



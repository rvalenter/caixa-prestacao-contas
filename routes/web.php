<?php

use Illuminate\Support\Facades\Route;

Route::get('/painel-gestor', [\App\Http\Controllers\HomeManagerController::class, 'index'])
    ->name('painel.gestor');

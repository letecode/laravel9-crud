<?php

use App\Http\Controllers\PersonnageController;
use Illuminate\Support\Facades\Route;

Route::controller(PersonnageController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/personnage/create', 'create');
    Route::get('/personnage/{id}', 'show');
    Route::get('/personnage/{id}/edit', 'edit');

    Route::post('/personnage', 'store');
    Route::patch('/personnage/{id}', 'update');
    Route::delete('/personnage/{id}', 'destroy');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\ReservaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tarefas', TarefaController::class);

Route::resource('salas', SalaController::class);

Route::resource('reservas', ReservaController::class);

Route::get('reservas/create/{salaId}', [ReservaController::class, 'create'])->name('reservas.create');



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

// Rota simples para a página inicial
Route::get('/', function () {
    return view('welcome');
    });

    // Rota para listar produtos
    Route::get('/produtos', [ProdutoController::class, 'index']);

    // Rota que recebe um parâmetro (ID do produto)
    Route::get('/produtos/{id}', [ProdutoController::class, 'show']);

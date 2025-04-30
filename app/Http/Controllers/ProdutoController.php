<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
    {
        // Método para listar produtos
        public function index()
    {
            // Simulação de um array de produtos
            $produtos = [
            ['id' => 1, 'nome' => 'Notebook', 'preco' => 4500],
            ['id' => 2, 'nome' => 'Mouse', 'preco' => 150],
            ['id' => 3, 'nome' => 'Teclado', 'preco' => 250],
        ];

        // Retorna a view 'produtos.index' passando a lista de produtos
        return view('produtos.index', compact('produtos'));
    }

        // Método para exibir um único produto pelo ID
        public function show($id)
    {

        // Simulação de um banco de dados de produtos
        $produtos = [
        1 => ['nome' => 'Notebook', 'preco' => 4500],
        2 => ['nome' => 'Mouse', 'preco' => 150],
        3 => ['nome' => 'Teclado', 'preco' => 250],
        ];

        // Verifica se o ID do produto existe no array
        if (!isset($produtos[$id])) {
        return "Produto não encontrado!";
        }

        // Retorna a view 'produtos.show' passando os detalhes do produto
        return view('produtos.show', ['produto' => $produtos[$id]]);
    }
}

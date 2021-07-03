<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = [
            'codigo' => '100100', 'descricao' => 'Alicate'
        ];
        return view('produto.index', compact('produtos'));
    }

    public function Lista()
    {
        return "GET: Lista";
    }

    public function postLista()
    {
        return "POST: Lista";
    }
}

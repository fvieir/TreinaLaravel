<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        return "GET: Index";
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        return view('home');
    }

    public function amigos ()
    {
        $amigos = [
                    ['nome' => 'Jose da Silva', 'idade' => '30'],
                    ['nome' => 'Pedro alvez', 'idade' => '40']
        ];

        return $amigos;
    }

    public function sobre ()
    {
        $eu = [
                'nome' => 'Fabrício',
                'idade' => 34, 
                'cargo' => 'desenvolvedor web'
            ];

        return view('sobre',compact('eu'));
    }

    public function dinamico ()
    {
        return view('paginaDinamica');
    }
}

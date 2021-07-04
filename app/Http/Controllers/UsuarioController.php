<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
   public function index()
   {
      $usuario = new Usuario();
      $user = $usuario->getUsuario();

      $user_1 = Usuario::lista();

      return view('usuario',compact('user','user_1'));
   }
}

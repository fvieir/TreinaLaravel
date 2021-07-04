<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function getUsuario()
    {
        return "Metodo Get usuario";
    }
    public static function lista()
    {
        return "Lista de usuario";
    }
}

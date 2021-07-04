@extends('layouts.principal')
@yield('titulo','Usuário')

@section('conteudo') 
    <p>Dados vindo da model : {{ $user }}</p>
    <p>Dados vindo da model metodo static {{ $user_1 }}</p>
@endsection


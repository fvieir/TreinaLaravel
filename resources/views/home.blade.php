@extends('layouts.principal')

@section('titulo') 
    Home app
@endsection

@section('Navbar') 
@parent
    <p>Nova NavBar</p>
@endsection

@section('conteudo') 

    @if(2 === 2)
        <p>É igual</p>
    @else   
        <p>É diferente</p>
    @endif

    @for ($i =0; $i < 4; $i++)
        <p>Usando o for {{$i}}</p>
    @endfor

    @foreach($usuarios as $usuario)
        <p>usuario: {{$usuario['nome']}}</p>
    @endforeach

    @forelse($livros as $livro)
        <p>{{$livro}}</p>
    @empty
        <p>Não há registros</p>
    @endforelse

    @foreach($sequencia as $seq)

        @continue($seq['ordem'] === 2)
        <p>{{$seq['ordem']}}</p>
        @break($seq['ordem'] === 4)

    @endforeach
@endsection



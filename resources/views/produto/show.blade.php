@extends('layout.app')
@section('title', $produto->titulo)
@section('content')
        <h1>Produto {{$produto->titulo}}</h1>
        <ul>
            <li>Referência: {{$produto->referencia}}</li>
            <li>Preço: {{$produto->preco}}</li>
            <li>Adicionado em: {{$produto->created_at}}</li>
        </ul>
        <p>{{$produto->descricao}}</p>
        <a href="javacript:history.go(-1)">Voltar</a>
    </body>
@endsection
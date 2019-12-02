@extends('layouts.app')

@section('content')

<h1> Lista de Atletas </h1>

<hr>
@foreach($atletas as $atletas)
    <h2><a href="/atletas/{{$atletas->id}}">{{$atletas->nome}}</a></h2><br>



@endforeach
<p class="h3"><a href="/eventos">Ver eventos</a></p>
<p class="h3"><a href="/esportes">Ver esportes</a></p>


@auth
<p class="h3"><a href="/atletas/create">Cadastrar Atleta</a></p>
@endauth

@endsection
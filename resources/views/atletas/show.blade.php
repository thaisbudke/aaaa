@extends('layouts.app')

@section('content')
<h1> Lista de Atletas 

<hr>
                <h1>
        	        <tr>
        	            <td>{{$atletas->id}}</td><br><br>
                        <td>{{$atletas->nome}}</td><br><br>

                        @auth
                        <td><a href="/atletas/{{$atletas->id}}/edit">Editar</a></td><br><br>
                        <td><a href="/atletas/{{$atletas->id}}/delete">Excluir</a></td>
                        @endauth

        	        </tr>
                </h1>
                
@endsection
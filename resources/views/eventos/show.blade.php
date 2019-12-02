@extends('layouts.app')

@section('content')
<h1> Lista de Eventos 

<hr>
                <h1>
        	        <tr>
        	            <td>{{$eventos->id}}</td><br><br>
                        <td>{{$eventos->titulo}}</td><br><br>
                        <td>{{$eventos->local}}</td><br><br>
                        <td>{{\Carbon\Carbon::parse($eventos->data)->format('d/m/Y h:m')}}</td><br><br>
        	            <td>{{$eventos->titulo}}</a></td><br><br>

                        @auth
                        <td><a href="/eventos/{{$eventos->id}}/edit">Editar</a></td><br><br>
                        <td><a href="/eventos/{{$eventos->id}}/delete">Excluir</a></td>
                        @endauth

        	        </tr>

                    <p>Esportes Relacionados:</p>
        <table id="tabela" name="tabela"  class="table table-striped ">
            <thead>
               <tr>
                    <td>Nome</td>
                    <td>Resultado</td>
                </tr>
            </thead>
            <tbody>
                @foreach($eventos->esportes as $esportes)
        	        <tr>
        	            <td><a href="/esportes/{{$esportes->id}}">{{$esportes->nome}}</a></td>
        	            <td>{{$esportes->resultado}}</td>
        	        </tr>
                @endforeach
                </h1>
@endsection
            

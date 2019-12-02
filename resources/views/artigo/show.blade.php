@extends('layouts.app')

@section('content')
<h1> Lista de Esportes 

<hr>
                <h1>
        	        <tr>
        	            <td>{{$esportes->id}}</td><br><br>
                        <td>{{$esportes->nome}}</td><br><br>
                        <td>{{$esportes->descricao}}</td><br><br>
                        <td>{{\Carbon\Carbon::parse($esportes->data)->format('d/m/Y h:m')}}</td><br><br>
                        
                        @if($esportes->genero == 'M')
                            <td>MASCULINO</td>
                        @else
                            <td>FEMININO</td> 
                        @endif   
                            
                        <br><br>
                        <td>{{$esportes->resultado}}</td><br><br>
                        
                        <td>{{$esportes->evento->titulo}}</td><br><br>

                        @auth
                        <td><a href="/esportes/{{$esportes->id}}/edit">Editar</a></td><br><br>
                        <td><a href="/esportes/{{$esportes->id}}/delete">Excluir</a></td><br><br>
                        @endauth

        <table id="tabela" name="tabela"  class="table table-striped ">
            <thead>
               <tr>
                    <td>Nome</td>
                </tr>
            </thead>
            <tbody>
                    @foreach($esportes->atletas as $atletas)
                        <tr>
                            <td>{{$atletas->nome}}</td><br><br>
                        </tr>
                    @endforeach

        	        </tr>
                </h1>
@endsection
                
           



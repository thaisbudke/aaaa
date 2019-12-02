@extends('layouts.app')

@section('content')
<h1> Editar Esportes <br><br>

<form action="/esportes/{{$esportes->id}}" method="POST">
	{{ csrf_field() }}
    {{ method_field('PUT') }}
	Nome: <input type="text" name="nome" id="nome" value="{{$esportes->nome}}">		<br>
	Descricao: <input type="text" name="descricao" id="descricao" value="{{$esportes->descricao}}">		<br>
	Data: <input type="datetime-local" name="data" id="data" value="{{$esportes->data}}">	<br>
    Genero: <input type="text" name="genero" id="genero" value="{{$esportes->genero}}">		<br>
    Resultado: <input type="text" name="resultado" id="resultado" value="{{$esportes->resultado}}">		<br>
	Evento: <select name='evento_id' id="evento_id" value="{{$esportes->evento_id}}"> 	<br>
			@foreach($eventos as $evento)
					<option value="{{$evento->id}}">{{$evento->titulo}}</option>
			@endforeach
			
	<input type="submit" value="salvar">
</form>
</h1> 

@endsection
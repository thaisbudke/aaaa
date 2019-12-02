@extends('layouts.app')

@section('content')

<h1>Editar Eventos <br><br>

<form action="/eventos/{{$eventos->id}}" method="POST">
	{{ csrf_field() }}
    {{ method_field('PUT') }}
	Titulo: <input type="text" name="titulo" value="{{$eventos->titulo}}">				<br>
	Local: <input type="text" name="local" value="{{$eventos->local}}">					<br>
	Data: <input type="datetime-local" name="data" value="{{$eventos->data}}">			<br>
	<input type="submit" value="salvar">
</form>
</h1> 

@endsection
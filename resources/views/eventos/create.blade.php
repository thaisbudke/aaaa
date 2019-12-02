@extends('layouts.app')

@section('content')

<h1> Criar Eventos <br><br>

<form action="/eventos" method="post">
	{{ csrf_field() }}
	Titulo: <input type="text" name="titulo">				<br>
	Local: <input type="text" name="local">					<br>
	Data: <input type="datetime-local" name="data">			<br>
	<input type="submit" value="salvar">
</form>
</h1> 

@endsection
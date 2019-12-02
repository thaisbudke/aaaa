@extends('layouts.app')

@section('content')
<h1> Editar Atletas <br><br>

<form action="/atletas/{{$atletas->id}}" method="POST">
	{{ csrf_field() }}
    {{ method_field('PUT') }}
	Nome: <input type="text" name="nome" id="nome" value="{{$atletas->nome}}">		<br>

	Esportes: <select name='esportes_id' id="esportes_id" value="{{$atletas->esportes_id}}"> 	<br>
			@foreach($esportes as $esportes)
					<option value="{{$esportes->id}}">{{$esportes->nome}}</option>
			@endforeach
			


	<input type="submit" value="salvar">
</form>
</h1> 
@endsection
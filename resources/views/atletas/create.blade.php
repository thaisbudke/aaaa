@extends('layouts.app')

@section('content')

<h1> Criar Atletas <br><br>

<form action="/atletas" method="post">
	{{ csrf_field() }}

	Nome: <input type="text" name="nome">	<br><br>
	Esporte:<select name='esportes_id'>
				@foreach($esportes as $esportes)
					<option value="{{$esportes->id}}">{{$esportes->nome}}</option>
				@endforeach
				

	</select><br><br>

	<input type="submit" value="salvar">
</form>
</h1> 

@endsection

@extends('layouts.app')

@section('content')
<h1> Cadastrar Artigos <br><br>

<form action="/artigo" method="post">
	{{ csrf_field() }}
	Título: <input type="text" name="titulo">				<br>
	Descricao: <input type="text" name="descricao">					<br>
	Data: <input type="datetime-local" name="data">			<br>
    Orientador: <input type="text" name="orientador"> <br>
	Empresa: <input type="text" name="empresa"> <br>
	Banca 1: <input type="text" name="banca1"> <br>
	Banca 2: <input type="text" name="banca2">					<br>
    Resultado: <input type="integer" name="resultado">					<br>

			
	</select><br>


	<input type="submit" value="Cadastrar">
</form>
</h1> 
@endsection
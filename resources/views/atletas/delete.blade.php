@extends('layouts.app')

@section('content')

<h1> Deletar 

			<form action="/atletas/{{$atletas->id}}" method="POST">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				<p>Você realmente deseja excluir o registro: {{$atletas->nome}}?</p>
				<input type="submit" value="Deletar">
			</form>
			<br>
			<br>
			<br>
		</div>
	</div>

@endsection
@extends('layout')

@section('title', $proyecto->titulo)

@section('content')
<div class="container">
	<div class="bg-white p-5 shadow rounded">
		<h1>{{ $proyecto->titulo}}</h1>
		<p>{{ $proyecto->descripcion}}</p>

		<a href="{{ route('projects.edit', $proyecto) }}">Editar</a>
		<form action="{{ route('projects.destroy', $proyecto) }}" method="POST">
			@csrf @method('DELETE')
			<input type="submit" value="Eliminar">
		</form>
	</div>
</div>
@endsection


@extends('layout')

@section('title', 'Editar Proyecto')

@section('content')
	<h1>Estás EDITANDO el proyecto</h1>

	<form action="{{ route('projects.update', $proyecto) }}" method="POST">
		@csrf @method('PATCH')
		<label for="titulo">
			Título del proyecto <br>
			<input type="text" name="titulo" value="{{ $proyecto->titulo}}">
			{!! $errors->first('titulo', '<small> :message </small><br>') !!}
		</label>
		<br>
		<label for="descripcion">
			Descripción del proyecto <br>
			<textarea name="descripcion">{{ $proyecto->descripcion}}</textarea>
			{!! $errors->first('descripcion', '<small> :message </small><br>') !!}
		</label>
		<input type="submit" value="Editar">

	</form>

@endsection
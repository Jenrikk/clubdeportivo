@extends('layout')

@section('title', 'Crear Proyecto')

@section('content')
	<div class="container">
		<h1>Crear nuevo proyecto</h1>

		<form class="bg-white py-3 px-4 shadow rounded" action="{{ route('projects.store') }}" method="post">
			@csrf
			<div class="form-group">
				<label for="titulo">Título del proyecto</label> <br>
				<input class="form-control bg-light shadow-sm border-0" type="text" name="titulo">
				{!! $errors->first('titulo', '<small> :message </small><br>') !!}
			</div>
			<br>
			<div class="form-group">
				<label for="descripcion">Descripción del proyecto</label> <br>
					<textarea class="form-control bg-light shadow-sm border-0" name="descripcion"></textarea>
					{!! $errors->first('descripcion', '<small> :message </small><br>') !!}
			</div>
			<input class="btn btn-primary btn-lg" type="submit" value="Crear">

		</form>
	</div>

@endsection
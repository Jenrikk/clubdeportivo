@extends('layout')

@section('title', 'Crear espacio')

@section('content')
	<div class="container">
		<h1>Crear nuevo espacio</h1>
		@if (session('status'))
			{{ session('status')}}
		@endif

		<form class="bg-white py-3 px-4 shadow rounded" action="{{ route('espacios.store') }}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="nombre">Nombre del recinto</label> <br>
				<input class="form-control bg-light shadow-sm border-0" type="text" name="nombre">
				{!! $errors->first('nombre', '<small> :message </small><br>') !!}
			</div>
			<br>
			<div class="form-group">
				<label for="descripcion">Descripción</label> <br>
					<textarea class="form-control bg-light shadow-sm border-0" name="descripcion"></textarea>
					{!! $errors->first('descripcion', '<small> :message </small><br>') !!}
			</div>
			<div class="form-group">
				<label for="imagen">Imagen</label> <br>
					<input type="file" name="imagen" accept="image/*">
					{!! $errors->first('imagen', '<small> :message </small><br>') !!}
			</div>
			<input class="btn btn-primary btn-lg" type="submit" value="Crear">
			<a class="btn btn-danger btn-lg" href="{{ url()->previous() }}">Atrás</a>

		</form>
	</div>

@endsection
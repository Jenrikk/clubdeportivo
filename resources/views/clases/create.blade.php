@extends('layout')

@section('title', 'Crear clase')

@section('content')
	<div class="container">
		<h1>Creando nueva clase</h1>
		@if (session('status'))
			{{ session('status')}}
		@endif

		<form class="bg-white py-3 px-4 shadow rounded" action="{{ route('clases.store') }}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="nombre">Nombre de la clase</label> <br>
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
			<div class="form-group">
				<label for="aforo">Aforo</label> <br>
				<input class="form-control bg-light shadow-sm border-0" type="number" min="0" name="aforo">
				{!! $errors->first('aforo', '<small> :message </small><br>') !!}
			</div>

			<div class="form-group">
				<label for="espacio_id">Espacio asignado</label> <br>
				<select class="form-control bg-light shadow-sm border-0" name="espacio_id" id="">
					@foreach ($espacios as $espacio)
						<option value="{{ $espacio->id }}">{{ $espacio->nombre }}</option>
					@endforeach
				</select>
					{!! $errors->first('espacio_id', '<small> :message </small><br>') !!}
			</div>
			<input class="btn btn-primary btn-lg" type="submit" value="Crear">
			<a class="btn btn-danger btn-lg" href="{{ url()->previous() }}">Atrás</a>

		</form>
	</div>

@endsection
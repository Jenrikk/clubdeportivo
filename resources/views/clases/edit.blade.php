@extends('layout')

@section('title', 'Editar clase')

@section('content')
	<div class="container">
		<h1>Editando clase: {{ $clase->nombre }}</h1>
		@if (session('status'))
			{{ session('status')}}
		@endif

		<form class="bg-white py-3 px-4 shadow rounded" action="{{ route('clases.update', $clase) }}" method="post" enctype="multipart/form-data">
			@csrf @method('PATCH')
			<div class="form-group">
				<label for="nombre">Nombre de la clase</label> <br>
				<input class="form-control bg-light shadow-sm border-0" type="text" name="nombre" value="{{ $clase->nombre }}">
				{!! $errors->first('nombre', '<small> :message </small><br>') !!}
			</div>
			<br>
			<div class="form-group">
				<label for="descripcion">Descripción</label> <br>
					<textarea class="form-control bg-light shadow-sm border-0" name="descripcion">{{ $clase->descripcion }}</textarea>
					{!! $errors->first('descripcion', '<small> :message </small><br>') !!}
			</div>
			<img class="card-img-top" src="{{ $clase->imagen }}">
			<div class="form-group">
				<label for="imagen">Imagen</label> <br>
					<input type="file" name="imagen" accept="image/*">
					{!! $errors->first('imagen', '<small> :message </small><br>') !!}
			</div>
			<div class="form-group">
				<label for="aforo">Aforo</label> <br>
				<input class="form-control bg-light shadow-sm border-0" type="number" min="0" name="aforo" value="{{ $clase->aforo }}">
				{!! $errors->first('aforo', '<small> :message </small><br>') !!}
			</div>

			<div class="form-group">
				<label for="espacio_id">Espacio asignado</label> <br>
				<select class="form-control bg-light shadow-sm border-0" name="espacio_id" id="">
					@foreach ($espacios as $espacio)
						<option value="{{ $espacio->id }}" {{ (old('espacio_id', $clase->espacio->id) == $espacio->id) ? 'selected' : $espacio->id }}>{{ $espacio->nombre }}</option>
					@endforeach
				</select>
					{!! $errors->first('espacio_id', '<small> :message </small><br>') !!}
			</div>
			<input class="btn btn-primary btn-lg" type="submit" value="Actualizar">
			<a class="btn btn-danger btn-lg" href="{{ url()->previous() }}">Atrás</a>

		</form>
	</div>

@endsection
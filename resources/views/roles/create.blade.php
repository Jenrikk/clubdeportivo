@extends('layout')

@section('title', 'Crear Proyecto')

@section('content')
	<div class="container">

		@if (session('status'))
			{{ session('status')}}
		@endif

		<h1>Crear nuevo rol</h1>

		<form class="bg-white py-3 px-4 shadow rounded" action="{{ route('roles.store') }}" method="post">
			@csrf
			<div class="form-group">
				<label for="key">Nombre clave</label> <br>
				<input class="form-control bg-light shadow-sm border-0" type="text" name="key">
				{!! $errors->first('key', '<small> :message </small><br>') !!}
			</div>
			<br>
			<div class="form-group">
				<label for="nombre">Nombre visible</label> <br>
					<input class="form-control bg-light shadow-sm border-0" type="text" name="nombre">
					{!! $errors->first('nombre', '<small> :message </small><br>') !!}
			</div>
			<input class="btn btn-primary btn-lg" type="submit" value="Crear">

		</form>
	</div>

@endsection
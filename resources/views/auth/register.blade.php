@extends('layout')

@section('title', 'Crear Proyecto')

@section('content')
	<div class="container">

		@if (session('status'))
			{{ session('status')}}
		@endif

		<h1>Crear nuevo USUARIO</h1>

		<form class="bg-white py-3 px-4 shadow rounded" action="{{ route('register') }}" method="post">
			@csrf

			<div class="form-group">
				<label for="role_id">Rol</label> <br>
				<select class="form-control bg-light shadow-sm border-0" name="role_id" id="">
					<option value="1">Admin</option>
					<option value="2">Staff</option>
					<option value="3">Cliente Oro</option>
					<option value="4">Cliente Plata</option>
				</select>
					{!! $errors->first('role_id', '<small> :message </small><br>') !!}
			</div>

			<div class="form-group">
				<label for="name">Nombre y apellidos</label> <br>
					<input class="form-control bg-light shadow-sm border-0" type="text" name="name">
					{!! $errors->first('name', '<small> :message </small><br>') !!}
			</div>

			<div class="form-group">
				<label for="email">Email</label> <br>
					<input class="form-control bg-light shadow-sm border-0" type="email" name="email">
					{!! $errors->first('email', '<small> :message </small><br>') !!}
			</div>

			<div class="form-group">
				<label for="password">Contraseña</label> <br>
					<input class="form-control bg-light shadow-sm border-0" type="password" name="password">
					{!! $errors->first('password', '<small> :message </small><br>') !!}
			</div>
			<div class="form-group">
				<label for="password_confirmation">Confirma la contraseña</label> <br>
					<input class="form-control bg-light shadow-sm border-0" type="password" name="password_confirmation">
					{!! $errors->first('password_confirmation', '<small> :message </small><br>') !!}
			</div>

			<div class="form-group">
				<label for="dni">DNI</label> <br>
					<input class="form-control bg-light shadow-sm border-0" type="text" name="dni">
					{!! $errors->first('dni', '<small> :message </small><br>') !!}
			</div>

			<div class="form-group">
				<label for="telefono">Teléfono</label> <br>
					<input class="form-control bg-light shadow-sm border-0" type="text" name="telefono">
					{!! $errors->first('telefono', '<small> :message </small><br>') !!}
			</div>

			<div class="form-group">
				<label for="fnac">Fecha de nacimiento</label> <br>
					<input class="form-control bg-light shadow-sm border-0" type="date" name="fnac">
					{!! $errors->first('fnac', '<small> :message </small><br>') !!}
			</div>
			<input class="btn btn-primary btn-lg" type="submit" value="Crear">

		</form>
	</div>

@endsection
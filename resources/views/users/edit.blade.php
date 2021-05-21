@extends('layout')

@section('title', 'Editar usuario')

@section('content')
	<div class="container">
		<h1>Editando usuario: {{ $usuario->name }}</h1>
		@if (session('status'))
			{{ session('status')}}
		@endif

		<form class="bg-white py-3 px-4 shadow rounded" action="{{ route('usuarios.update', $usuario) }}" method="post" enctype="multipart/form-data">
			@csrf @method('PATCH')

            <div class="form-group">
                <label for="role_id">Rol</label> <br>
                <select class="form-control bg-light shadow-sm border-0" name="role_id" id="" >
                	@foreach ($roles as $rol)
                    	<option value="{{ $rol->id }}" {{ (old('role_id', $usuario->role->id) == $rol->id) ? 'selected' : $rol->id }}>{{ $rol->nombre}}</option>
                	@endforeach
                </select>
                    {!! $errors->first('role_id', '<small> :message </small><br>') !!}
            </div>

            <div class="form-group">
                <label for="name">Nombre y apellidos</label>
                <input class="form-control bg-light shadow-sm border-0" type="text" name="name" value="{{ $usuario->name }}">
                {!! $errors->first('name', '<small> :message </small>') !!}
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control bg-light shadow-sm border-0" type="email" name="email" value="{{ $usuario->email }}">
                {!! $errors->first('email', '<small> :message </small>') !!}
            </div>

            <div class="form-group">
                <label for="dni">DNI</label>
                <input class="form-control bg-light shadow-sm border-0" type="text" name="dni" value="{{ $usuario->dni }}">
                {!! $errors->first('dni', '<small> :message </small>') !!}
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input class="form-control bg-light shadow-sm border-0" type="text" name="telefono" value="{{ $usuario->telefono }}">
                {!! $errors->first('telefono', '<small> :message </small>') !!}
            </div>

            <div class="form-group">
                <label for="fnac">Fecha de nacimiento</label>
                <input class="form-control bg-light shadow-sm border-0" type="date" name="fnac" value="{{ $usuario->fnac }}">
                {!! $errors->first('fnac', '<small> :message </small>') !!}
            </div>
            <input class="btn btn-primary btn-lg" type="submit" value="Actualizar">
			<a class="btn btn-danger btn-lg" href="{{ url()->previous() }}">Atrás</a>
        </form>
	</div>

@endsection
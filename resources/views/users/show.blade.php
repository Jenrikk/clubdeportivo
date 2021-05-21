@extends('layout')

@section('title', 'Usuario')

@section('content')
	<div class="container">
		<h1 class="display-4">{{ $usuario->name }}</h1>
		@if (session('status'))
			{{ session('status')}}
		@endif

		<div class="row">
			<div class="col-12 col-sm-12 col-lg-12">
				<div class="card" style="width: auto; ">
				  <img class="card-img-top" src="/images/perfil.png">
				  <div class="card-body">
				    <h5 class="card-title">Nombre: {{ $usuario->name }}</h5>
				    <h5 class="card-title">Perfil: {{ $usuario->role->nombre }}</h5>
				    <h5 class="card-title">Email: {{ $usuario->email }}</h5>
				    <h5 class="card-title">Dni: {{ $usuario->dni }}</h5>
				    <h5 class="card-title">Teléfono: {{ $usuario->telefono }}</h5>
				    <h5 class="card-title">Fecha nacimiento: {{ date('d-m-Y', strtotime($usuario->fnac)) }}</h5>

				    <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-primary btn-lg">Editar</a>
				    <a class="btn btn-warning btn-lg" href="{{ url()->previous() }}">Atrás</a>
				    @if (auth()->user()->role->key === 'admin')
					    <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST">
							@csrf @method('DELETE')
							<input class="btn btn-danger btn-lg" type="submit" value="Eliminar">
						</form>
				    @else
				    	{{-- No puedes eliminar un usuario si no eres admin --}}
				    @endif
				  </div>
				</div>
			</div>
		</div>
	</div>

@endsection
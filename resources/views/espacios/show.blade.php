@extends('layout')

@section('title', 'Espacio')

@section('content')

@if (auth()->user()->role->key === 'admin' or auth()->user()->role->key === 'staff')

	<div class="container">
		<h1 class="display-4">{{ $espacio->nombre }}</h1>
		@if (session('status'))
			{{ session('status')}}
		@endif

		<div class="row">
			<div class="col-12 col-sm-12 col-lg-12">
				<div class="card" style="width: auto; ">
				  <img class="card-img-top" src="{{ $espacio->imagen }}">
				  <div class="card-body">
				    <h5 class="card-title">Descripción</h5>
				    <p class="card-text">{{ $espacio->descripcion }}</p>
				    <a href="{{ route('espacios.edit', $espacio) }}" class="btn btn-primary btn-lg">Editar</a>
				    <a class="btn btn-warning btn-lg" href="{{ url()->previous() }}">Atrás</a>
				    <form action="{{ route('espacios.destroy', $espacio) }}" method="POST">
						@csrf @method('DELETE')
						<input class="btn btn-danger btn-lg" type="submit" value="Eliminar">
					</form>
				  </div>
				</div>
			</div>
		</div>
	</div>

@else

	<div class="container">
		<h1 class="display-4">{{ $espacio->nombre }}</h1>
		@if (session('status'))
			{{ session('status')}}
		@endif

		<div class="row">
			<div class="col-12 col-sm-12 col-lg-12">
				<div class="card" style="width: auto; ">
				  <img class="card-img-top" src="{{ $espacio->imagen }}">
				  <div class="card-body">
				    <h5 class="card-title">Descripción</h5>
				    <p class="card-text">{{ $espacio->descripcion }}</p>

				    <a class="btn btn-warning btn-lg" href="{{ url()->previous() }}">Atrás</a>

				  </div>
				</div>
			</div>
		</div>
	</div>

@endif

@endsection
@extends('layout')

@section('title', 'Clase')

@section('content')
	<div class="container">
		<h1 class="display-4">{{ $clase->nombre }}</h1>
		@if (session('status'))
			{{ session('status')}}
		@endif

		<div class="row">
			<div class="col-12 col-sm-12 col-lg-12">
				<div class="card" style="width: auto; ">
				  <img class="card-img-top" src="{{ $clase->imagen }}">
				  <div class="card-body">
				    <h5 class="card-title">Descripción</h5>
				    <p class="card-text">{{ $clase->descripcion }}</p>
				    <p class="card-text"> Aforo: {{ $clase->aforo }}</p>
				    <p class="card-text"> Espacio asignado: {{ $clase->espacio->nombre }}</p>
				    <a href="{{ route('clases.edit', $clase) }}" class="btn btn-primary btn-lg">Editar</a>
				    <a class="btn btn-warning btn-lg" href="{{ url()->previous() }}">Atrás</a>
				    <form action="{{ route('clases.destroy', $clase) }}" method="POST">
						@csrf @method('DELETE')
						<input class="btn btn-danger btn-lg" type="submit" value="Eliminar">
					</form>
				  </div>
				</div>
			</div>
		</div>
	</div>

@endsection
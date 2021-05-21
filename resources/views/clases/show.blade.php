@extends('layout')

@section('title', 'Clase')

@section('content')

 @if (auth()->user()->role->key === 'admin' or auth()->user()->role->key === 'staff')

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

@else

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
				    <form action="{{ route('reservaclase') }}" method="POST">
						@csrf
						<input type="hidden" name="usuario" value="{{ auth()->user()->id }}">
						<input type="hidden" name="clase" value="{{ $clase->id }}">
					  	<input class="form-control datepicker" placeholder="Selecciona día" name="dia" type="text">
					  	<label for="empieza">Empieza</label>
					  	<input type="time" name="empieza" id="">
					  	<label for="acaba">Acaba</label>
					  	<input type="time" name="acaba" id="">
						<input class="btn btn-danger btn-lg" type="submit" value="RESERVAR">
					</form>
				    <a class="btn btn-warning btn-lg" href="{{ url()->previous() }}">Atrás</a>

				  </div>
				</div>
			</div>
		</div>
	</div>

	@section('scripts')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( ".datepicker" ).datepicker({
            	minDate:new Date(),
            	dateFormat: 'dd-mm-y',
            	firstDay: 1,
                changeMonth: true,
                changeYear: true
            });
        });


    </script>
	@endsection {{-- end de scripts --}}



@endif

@endsection
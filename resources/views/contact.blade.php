@extends('layout')

@section('title', 'CONTACTO')

@section('content')
<div class="container">

	{{-- este session es un mensaje flash, a modo de feedback al usuario--}}
	@if (session('status'))
		{{ session('status')}}
	@endif


	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			<form class="bg-white shadow rounded py-3 px-4" action="{{ route('contactoPost') }}" method="post">
				@csrf
				<h1 class="display-5" >Estás en Contacto</h1>
				<div class="form-group">
					<input class="form-control bg-light shadow-sm border-0" type="text" name="nombre" placeholder="Ingrese su nombre" value="{{ old('nombre')}}"><br>
					{!! $errors->first('nombre', '<small> :message </small><br>') !!}
				</div>

				<div class="form-group">
					<input class="form-control bg-light shadow-sm border-0" type="email" name="email" placeholder="Ingrese su email" value="{{ old('email')}}"><br>
					{!! $errors->first('email', '<small> :message </small><br>') !!}
				</div>

				<div class="form-group">
					<input class="form-control bg-light shadow-sm border-0" type="text" name="subject" placeholder="Ingrese el asunto" value="{{ old('subject')}}"><br>
					{!! $errors->first('subject', '<small> :message </small><br>') !!}
				</div>

				<div class="form-group">
					<textarea class="form-control bg-light shadow-sm border-0" name="content" placeholder="Mensaje..." value="{{ old('content')}}"></textarea><br>
					{!! $errors->first('content', '<small> :message </small><br>') !!}
				</div>

				<input class="btn btn-primary btn-lg" type="submit" value="Enviar">
			</form>

		</div>
	</div>



</div>

@endsection
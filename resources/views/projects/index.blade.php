@extends('layout')

@section('title', 'PORTFOLIO')

@section('content')
	<div class="container">
		<h1 class="display-4" >Estás en Portfolio</h1>
		<a class="btn btn-primary mb-2" href="{{ route('projects.create') }}">Crear nuevo proyecto</a>

		@if (session('status'))
			{{ session('status')}}
		@endif

		<ul class="list-group">
			@if ($portfolio)
				@foreach ($portfolio as $portfolioItem)
					<li class="list-group-item border-0 mb-1 shadow-sm">
						<a href=" {{ route('projects.show', $portfolioItem) }}">{{ $portfolioItem->titulo }}</a>
					</li><br>
				@endforeach
			@else
				<li>No hay proyectos</li>
			@endif


		</ul>
	</div>

@endsection



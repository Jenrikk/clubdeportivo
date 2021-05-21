@extends('layout')

@section('title', 'USUARIOS')

@section('content')


  <h1>Gestionar usuarios</h1>
  <section class="wrapper">
  <div class="container">
  	@if (auth()->user()->role->key === 'admin')
      <a href="{{ route('register') }}" class="btn btn-primary mb-4">Crear nuevo usuario</a>
  	@else
  		{{-- nada porque no eres admin --}}
  	@endif
      <div class="row">
    	<div class="col-12 col-sm-6">
    		<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="/images/workers.png" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Trabajadores</h5>
			    <a href="{{ route('usuarios.indexT') }}" class="btn btn-primary">Gestionar</a>
			  </div>
			</div>
	    </div>
	    <div class="col-12 col-sm-6">
    		<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="/images/usuarios.png" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Clientes</h5>
			    <a href="{{ route('usuarios.indexC') }}" class="btn btn-primary">Gestionar</a>
			  </div>
			</div>
	    </div>

      </div>
  </div>
  </section>



@endsection
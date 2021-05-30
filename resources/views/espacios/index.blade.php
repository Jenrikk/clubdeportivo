@extends('layout')

@section('title', 'HOME')

@section('content')

@if (auth()->user()->role->key === 'admin' or auth()->user()->role->key === 'staff')

    <h1>Gestionar espacios</h1>
  <section class="wrapper">
  <div class="container">
      <a href="{{ route('espacios.create') }}" class="btn btn-primary mb-4">Crear nuevo espacio</a>
      <div class="row">
        @foreach ($espacios as $espacio)
          <div class="col-sm-4">
            <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?gym,sport');">
              <div class="card-img-overlay d-flex flex-column">
                <div class="card-body">
                  <h4 class="card-title mt-0 "><a class="text-white" href="{{ route('espacios.show', $espacio) }}">{{$espacio->nombre}}</a></h4>
                </div>
              </div>
            </div>
          </div>
        @endforeach

      </div>
  </div>
  </section>

@else

  <h1>Reservar espacios</h1>
  <section class="wrapper">
  <div class="container">
      <div class="row">
        @foreach ($espacios as $espacio)
          <div class="col-sm-4">
            <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?gym,sport');">
              <div class="card-img-overlay d-flex flex-column">
                <div class="card-body">
                  <h4 class="card-title mt-0 "><a class="text-white" href="{{ route('espacios.show', $espacio) }}">{{$espacio->nombre}}</a></h4>
                </div>
              </div>
            </div>
          </div>
        @endforeach

      </div>
  </div>
  </section>

@endif




@endsection
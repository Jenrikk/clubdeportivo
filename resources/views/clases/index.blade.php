@extends('layout')

@section('title', 'HOME')

@section('content')

  @if (auth()->user()->role->key === 'admin' or auth()->user()->role->key === 'staff')

    <h1>Gestionar clases</h1>
    <section class="wrapper">
    <div class="container">
        <a href="{{ route('clases.create') }}" class="btn btn-primary mb-4">Crear nueva clase</a>
        <div class="row">
          @foreach ($clases as $clase)
            <div class="col-sm-4">
              <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?gym,sport');">
                <div class="card-img-overlay d-flex flex-column">
                  <div class="card-body">
                    <h4 class="card-title mt-0 "><a class="text-white" href="{{ route('clases.show', $clase) }}">{{$clase->nombre}}</a></h4>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

        </div>
    </div>
    </section>

  @else

    <h1>Reservar clase</h1>
    <section class="wrapper">
    <div class="container">
        <div class="row">
          @foreach ($clases as $clase)
            <div class="col-sm-4">
              <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?gym,sport');">
                <div class="card-img-overlay d-flex flex-column">
                  <div class="card-body">
                    <h4 class="card-title mt-0 "><a class="text-white" href="{{ route('clases.show', $clase) }}">{{$clase->nombre}}</a></h4>
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
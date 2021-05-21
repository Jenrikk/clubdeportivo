@extends('layout')

@section('title', 'TRABAJADORES')

@section('content')


  <h1>Gestionar TRABAJADORES</h1>
  <section class="wrapper">
  <div class="container">

      <div class="row">
        @foreach ($trabajadores as $trabajador)
         @if ($trabajador->role->key == 'admin' or $trabajador->role->key == 'staff')
            <div class="col-sm-4">
              <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?gym,sport');">
                <div class="card-img-overlay d-flex flex-column">
                  <div class="card-body">
                    <h4 class="card-title mt-0 "><a class="text-white" href="{{ route('usuarios.show', $trabajador) }}">{{$trabajador->name}} <br> {{$trabajador->role->nombre}}</a></h4>
                  </div>
                </div>
              </div>
            </div>
           @else
           {{-- Dejamos vacio --}}
         @endif
        @endforeach

      </div>
  </div>
  </section>



@endsection
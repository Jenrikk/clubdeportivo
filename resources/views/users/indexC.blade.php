@extends('layout')

@section('title', 'CLIENTES')

@section('content')


  <h1>Gestionar CLIENTES</h1>
  <section class="wrapper">
  <div class="container">

      <div class="row">
        @foreach ($clientes as $cliente)
         @if ($cliente->role->key == 'admin' or $cliente->role->key == 'staff')
           {{-- nada --}}
           @else
            <div class="col-sm-4">
              <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?gym,sport');">
                <div class="card-img-overlay d-flex flex-column">
                  <div class="card-body">
                    <h4 class="card-title mt-0 "><a class="text-white" href="{{ route('usuarios.show', $cliente) }}">{{$cliente->name}} <br> {{$cliente->role->nombre}}</a></h4>
                  </div>
                </div>
              </div>
            </div>
         @endif
        @endforeach

      </div>
  </div>
  </section>



@endsection
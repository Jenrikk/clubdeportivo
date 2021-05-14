@extends('layout')

@section('title', 'HOME')

@section('content')

    @guest
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h3>Bienvenido invitado</h3>
                    <h1 class="display-4">Contenido de clientes</h1>
                    <p class="lead text-secondary">Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Neque quod rerum dolor, adipisci, ullam commodi tenetur labore minima, nihil qui distinctio fugit iure doloremque aspernatur laborum! Quibusdam itaque, neque incidunt?</p>
                </div>

                <div class="col-12 col-lg-6">
                    <img class="img-fluid" src="/images/home.svg" alt="home">
                </div>

            </div>
        </div>
    @else
        @if (auth()->user()->role->key === 'admin' or auth()->user()->role->key === 'staff')
            <div class="container">
                <h4 class="display-4 mb-4">Bienvenido {{ auth()->user()->name }} {{ auth()->user()->role->key }}</h4>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-6 d-flex align-items-stretch mb-3 mt-3">
                         <div class="card" style="width: 18rem;">
                          <img src="/images/clases.svg" class="card-img-top" alt="...">
                          <div class="card-body ">
                            <a href="{{ route('clases.index') }}" class="btn btn-primary">GESTIONAR CLASES</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 d-flex align-items-stretch mb-3 mt-3">
                         <div class="card" style="width: 18rem;">
                          <img src="/images/espacios.svg" class="card-img-top" alt="...">
                          <div class="card-body ">
                            <a href="{{ route('espacios.index') }}" class="btn btn-primary">GESTIONAR ESPACIOS</a>
                          </div>
                        </div>
                    </div>
                    <hr class="mt-2 mb-3"/>
                    <div class="col-12 col-sm-6 col-lg-6 d-flex align-items-stretch mb-3 mt-3">
                         <div class="card" style="width: 18rem;">
                          <img src="/images/usuarios.svg" class="card-img-top" alt="...">
                          <div class="card-body ">
                            <a href="#" class="btn btn-primary">GESTIONAR USUARIOS</a>
                          </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-12 col-sm-6 col-lg-6 d-flex align-items-stretch mb-3 mt-3">
                         <div class="card" style="width: 18rem;">
                          <img src="/images/reservas.svg" class="card-img-top" alt="...">
                          <div class="card-body ">
                            <a href="#" class="btn btn-primary">GESTIONAR RESERVAS</a>
                          </div>
                        </div>
                    </div>

                </div>
            </div>
        @else
            <div class="container">
                <h4 class="display-4 mb-4">Bienvenido {{ auth()->user()->name}}</h4>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-6 d-flex align-items-stretch">
                         <div class="card" style="width: 18rem;">
                          <img src="/images/reserva.svg" class="card-img-top" alt="...">
                          <div class="card-body ">
                            <h3 class="card-title">Reserva ahora!</h3>
                            <a href="#" class="btn btn-primary">RESERVAR</a>
                          </div>
                        </div>
                    </div>
                     <div class="col-12 col-sm-6 col-lg-6 d-flex align-items-stretch">
                         <div class="card" style="width: 18rem;">
                          <img src="/images/entrenamientos.svg" class="card-img-top" alt="...">
                          <div class="card-body ">
                            <h3 class="card-title">Plan de entrenamiento</h3>
                            <a href="#" class="btn btn-primary">VER</a>
                          </div>
                        </div>
                    </div>

                </div>
            </div>

        @endif
    @endguest

@endsection

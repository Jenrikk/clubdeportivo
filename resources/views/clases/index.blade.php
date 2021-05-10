@extends('layout')

@section('title', 'HOME')

@section('content')


  <h1>Gestionar clases</h1>
  <section class="wrapper">
  <div class="container">
      <div class="row">
        @foreach ($clases as $clase)
          <div class="col-sm-4">
            <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?gym,sport');">
              <div class="card-img-overlay d-flex flex-column">
                <div class="card-body">
                  <h4 class="card-title mt-0 "><a class="text-white" href="#">{{$clase->nombre}}</a></h4>
                </div>
              </div>
            </div>
          </div>
        @endforeach

      </div>
  </div>
  </section>



@endsection
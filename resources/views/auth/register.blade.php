@extends('layout')

@section('content')
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="mb-3">{{ __('auth.register') }}</h1>

                <form class="bg-white py-3 px-4 shadow rounded" action="{{ route('register') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="role_id">Rol</label> <br>
                        <select class="form-control bg-light shadow-sm border-0" name="role_id" id="">
                            <option value="1">Admin</option>
                            <option value="2">Staff</option>
                            <option value="3">Cliente Oro</option>
                            <option value="4">Cliente Plata</option>
                        </select>
                        {!! $errors->first('role_id', '<small> :message </small><br>') !!}
                    </div>
                    <div class="form-group">
                        <label for="name">Nombre y apellidos</label>
                        <input class="form-control bg-light shadow-sm border-0" type="text" name="name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control bg-light shadow-sm border-0" type="email" name="email">
                        {!! $errors->first('email', '<small> :message </small>') !!}
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input class="form-control bg-light shadow-sm border-0" type="password" name="password">
                        {!! $errors->first('password', '<small> :message </small>') !!}
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirma la contraseña</label>
                        <input class="form-control bg-light shadow-sm border-0" type="password" name="password_confirmation">
                        {!! $errors->first('password_confirmation', '<small> :message </small>') !!}
                    </div>

                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input class="form-control bg-light shadow-sm border-0" type="text" name="dni">
                        {!! $errors->first('dni', '<small> :message </small>') !!}
                    </div>

                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input class="form-control bg-light shadow-sm border-0" type="text" name="telefono">
                        {!! $errors->first('telefono', '<small> :message </small>') !!}
                    </div>

                    <div class="form-group">
                        <label for="fnac">Fecha de nacimiento</label>
                        <input class="form-control bg-light shadow-sm border-0" type="date" name="fnac">
                        {!! $errors->first('fnac', '<small> :message </small>') !!}
                    </div>
                    <button type="submit" class="btn btn-primary">
                        {{ __('auth.submit_register') }}
                    </button>
                </form>
            </div>
        </div>
	</div>
@endsection

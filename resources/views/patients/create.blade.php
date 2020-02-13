@extends('layouts.app')

@section('title', 'Registro de Usuarios')

@section('content')
    <div class="container">
        <h4>
            Creacion de nuevo funcionario
        </h4>

        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
                @include('users.partials._form', ['btnLabel' => 'REGISTRAR'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
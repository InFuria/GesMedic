@extends('layouts.app')

@section('title', 'Registro de Sucursales')

@section('content')
    <div class="container">
        <h4>
            Creacion de nueva sucursal
        </h4>

        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'branches.store', 'method' => 'POST']) !!}
                @include('branches.partials._form', ['btnLabel' => 'REGISTRAR'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
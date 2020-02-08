@extends('layouts.app')

@section('title', 'Permisos')

@section('content')
    <div class="container">
        <h4>
            Crear Permiso
        </h4>

        <div class="card col-6">
            <div class="card-body">
                {!! Form::open(['route' => 'permissions.store', 'method' => 'POST']) !!}
                @include('permissions.partials._form', ['btnLabel' => 'CREAR'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
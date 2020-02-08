@extends('layouts.app')

@section('title', 'Permisos')

@section('content')
    <div class="container">
        <h4>
            Editar Permiso
        </h4>

        <div class="card col-6">
            <div class="card-body">
                {!! Form::model($permission, ['route' => ['permissions.update', $permission->id], 'method' => 'POST']) !!}
                @method('PATCH')

                @include('permissions.partials._form', ['btnLabel' => 'CREAR'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
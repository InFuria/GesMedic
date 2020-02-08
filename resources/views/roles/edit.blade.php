@extends('layouts.app')

@section('title', 'Roles')

@section('content')
    <div class="container">
        <h4>
            Editar Rol
        </h4>

        <div class="card col-11">
            <div class="card-body">
                {!! Form::model($role, ['route' => ['roles.update', $permission->id], 'method' => 'POST']) !!}
                @method('PATCH')

                @include('roles.partials._form', ['btnLabel' => 'CREAR'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('title', 'Edicion de Usuarios')

@section('content')
    <div class="container">
        <h4>
            Editar funcionario
        </h4>

        <div class="card">
            <div class="card-body">
                {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'POST']) !!}
                @method('PATCH')

                @include('users.partials._form', ['btnLabel' => 'ACTUALIZAR'])

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
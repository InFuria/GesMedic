@extends('layouts.app')

@section('title', 'Roles')

@section('content')
    <div class="container">
        <h4>
            Crear Rol
        </h4>

        <div class="card col-11">
            <div class="card-body">
                {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
                @include('roles.partials._form', ['btnLabel' => 'CREAR'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('#permissionBtn').on('click', function () {
            $('#permissionsList').prepend();
        });
    </script>
@append
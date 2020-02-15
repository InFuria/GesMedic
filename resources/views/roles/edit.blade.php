@extends('layouts.app')

@section('title', 'Roles')

@section('content')
    <div class="container">
        <h4>
            Editar Rol
        </h4>

        <div class="card col-11">
            <div class="card-body">
                {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'POST']) !!}
                @method('PATCH')

                @include('roles.partials._form', ['btnLabel' => 'ACTUALIZAR'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        let permissionList = $('#permissionsList');
        let permissionBtn = $('#permissionBtn');

        @if(count($role->permissions) == 0)
            permissionList.hide();
        @else
            permissionBtn.attr('checked', 'checked');
        @endif

        permissionBtn.on('click', function () {
            permissionList.show();
        });
    </script>
@append
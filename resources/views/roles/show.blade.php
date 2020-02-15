@extends('layouts.app')

@section('title', 'Roles')

@section('content')
    <div class="container">
        <h4>
            Detalle del rol
        </h4>

        <div class="row">
            <div class="col-8">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <i class="fas fa-user-tag fa-10x"></i>
                            </div>
                            <div class="col-8 ml-5">
                                <h4>{{ $role->name }} <small class="text-black-50 font-italic">({{ $role->slug }})</small></h4>

                                    @if($role->special == 'all-access')
                                        <label class="btn btn-success rounded">Acceso total (todos los permisos habilitados)</label>
                                    @elseif($role->special == 'no-access')
                                        <label class="btn btn-danger rounded">Sin acceso (todos los permisos restringidos)</label>
                                    @else
                                        <hr>
                                        <h5 style="text-decoration: underline">Permisos Asignados:</h5>

                                        <div class="row ml-1">
                                            @foreach($role->permissions as $permission)
                                                <label class="btn rounded-pill border btn-sm mr-1" style="background-color: #BCEBCF">{{ $permission->name }}</label>
                                            @endforeach
                                        </div>
                                    @endif
                            </div>
                        </div>

                    </div>
                </div>
                <a href="{{ route('roles.index') }}" class="btn btn-secondary btn-block mt-2">VOLVER</a>
            </div>
        </div>
    </div>
@endsection
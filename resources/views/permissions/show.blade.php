@extends('layouts.app')

@section('title', 'Permisos')

@section('content')
    <div class="container">
        <h4>
            Detalle del permiso
        </h4>

        <div class="row">
            <div class="col-8">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 ml-5">
                                <h4>Nombre: <i>{{ $permission->name }}</i></h4>
                                <p>
                                    {{--<label class="font-weight-bolder font-italic">Cedula: </label>--}}
                                    <i class="fas fa-id-card"></i>
                                    &nbsp; {{ $permission->slug }}
                                    <br>

                                    {{--<label class="font-weight-bolder font-italic">Email: </label>--}}
                                    <i class="fas fa-info mt-3"></i>
                                    &nbsp; {{ $permission->description }}
                                    <br>

                                    <i class="fas fa-calendar-day mt-3"></i>
                                    &nbsp; {{ $permission->created_at }}
                                    <br>

                                    <i class="fas fa-calendar-check mt-3"></i>
                                    &nbsp; {{ $permission->updated_at }}
                                    <br>
                                </p>
                            </div>
                            <div class="col-4 float-left border-left">
                                <h4>Roles Relacionados</h4>
                                @if(count($roles) > 0)
                                    @foreach($roles as $role)
                                        <label class="btn btn-info rounded mt-1">{{ $role->name }}</label>
                                    @endforeach
                                @else
                                    <label class="btn btn-danger rounded">No asignado</label>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                <a href="{{ route('permissions.index') }}" class="btn btn-secondary btn-block mt-2">VOLVER</a>
            </div>
        </div>
    </div>
@endsection
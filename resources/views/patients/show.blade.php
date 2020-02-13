@extends('layouts.app')

@section('title', 'Detalle de Usuario')

@section('content')
    <div class="container">
        <h4>
            Detalle del funcionario
        </h4>

        <div class="row">
            <div class="col-8">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <img src="https://i-love-png.com/images/user-ready-spotteron-citizen-science-43537.png" alt="" class="img-rounded img-responsive" style="width: 200px; height: 200px">
                            </div>
                            <div class="col-8 ml-5">
                                <h4>{{ $user->name }}
                                    <small class="text-black-50 font-italic">
                                        (<cite title="address">{{ $user->username }}
                                            <i class="glyphicon glyphicon-map-marker"></i>
                                        </cite>)
                                    </small>
                                </h4>
                                <p>
                                    {{--<label class="font-weight-bolder font-italic">Cedula: </label>--}}
                                    <i class="fas fa-id-card"></i>
                                    &nbsp; {{ $user->ci }}
                                    <br>

                                    {{--<label class="font-weight-bolder font-italic">Email: </label>--}}
                                    <i class="fas fa-mail-bulk mt-3"></i>
                                    &nbsp; {{ $user->email }}
                                    <br>

                                    {{--<label class="font-weight-bolder font-italic">Telefono: </label>--}}
                                    <i class="fas fa-phone-alt mt-3"></i>
                                    &nbsp; {{ $user->phone }}
                                    <br>

                                    {{--<label class="font-weight-bolder font-italic">Direccion: </label>--}}
                                    <i class="fas fa-map-marked-alt mt-3"></i>
                                    &nbsp; {{ $user->address }}
                                    <br>

                                   {{-- <label class="font-weight-bolder font-italic">Cargo: </label>--}}
                                    <i class="fas fa-tag mt-3"></i>
                                    &nbsp; {{ $type->description }}
                                    <br>
                                </p>

                                @if($user->status == 1)
                                    <label class="btn btn-success rounded mt-1" style="margin-top: -15px";>Habilitado</label>
                                @else
                                    <label class="btn btn-danger rounded mt-1" style="margin-top: -15px";>Deshabilitado</label>
                                @endif


                            </div>
                        </div>

                    </div>
                </div>
                <a href="{{ route('users.index') }}" class="btn btn-secondary btn-block mt-2">VOLVER</a>
            </div>
        </div>
    </div>
@endsection
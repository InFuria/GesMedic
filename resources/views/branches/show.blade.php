@extends('layouts.app')

@section('title', 'Detalle de Sucursal')

@section('content')
    <div class="container">
        <h4>
            Detalle de la sucursal
        </h4>

        <div class="row">
            <div class="col-8">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <i class="fas fa-store fa-10x"></i>
                            </div>
                            <div class="col-8 ml-5">
                                <h4>{{$branch->name}}
                                    <small class="text-black-50 font-italic">
                                        (<cite title="codigo">{{ $branch->code }}
                                            <i class="glyphicon glyphicon-map-marker"></i>
                                        </cite>)
                                    </small>
                                </h4>
                                <p>
                                    {{--<label class="font-weight-bolder font-italic">Email: </label>--}}
                                    <i class="fas fa-map-marked-alt mt-3"></i>
                                    &nbsp; {{ $branch->address }}
                                    <br>

                                    {{--<label class="font-weight-bolder font-italic">Telefono: </label>--}}
                                    <i class="fas fa-phone-alt mt-3"></i>
                                    &nbsp; {{ $branch->phone }}
                                    <br>

                                    {{--<label class="font-weight-bolder font-italic">Email: </label>--}}
                                    <i class="fas fa-city mt-3"></i>
                                    &nbsp; {{ $department->name }}
                                    <br>
                                </p>

                            </div>
                        </div>

                    </div>
                </div>
                <a href="{{ route('branches.index') }}" class="btn btn-secondary btn-block mt-2">VOLVER</a>
            </div>
        </div>
    </div>
@endsection
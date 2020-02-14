@extends('layouts.app')

@section('title', 'Edicion de Sucursales')

@section('content')
    <div class="container">
        <h4>
            Editar Sucursal
        </h4>

        <div class="card">
            <div class="card-body">
                {!! Form::model($branch, ['route' => ['branches.update', $branch->id], 'method' => 'POST']) !!}
                @method('PATCH')

                @include('branches.partials._form', ['btnLabel' => 'ACTUALIZAR'])

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('title', 'Registro de Usuarios')

@section('content')
    <div class="container">
        <h4>
            Creacion de nuevo usuario
        </h4>

        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
                @include('users.partials._form', ['btnLabel' => 'REGISTRAR'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        var select_type, $select_type;
        var select_country, $select_country;

        $select_type = $('#document_type_id').selectize({
            valueField: 'id',
            labelField: 'name',
            searchField: 'name',
            persist: true,
            placeholder: 'Seleccione un tipo de documento',
            options: {!! json_encode($document_type) !!}
        });

        /*$select_country = $('#country_id').selectize({
            valueField: 'id',
            labelField: 'name',
            searchField: 'name',
            persist: true,
            placeholder: 'Seleccione un tipo de documento',
            options: {{--{!! json_encode($countries) !!}--}}
        });*/

        select_type = $select_type[0].selectize;
        /*select_country = $select_country[0].selectize;*/
    </script>
@append
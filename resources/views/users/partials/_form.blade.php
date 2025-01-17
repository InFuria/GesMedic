@csrf

<div class="row">
    {{--<div class="form-group col-5 ml-1">
        {!! Form::label('country_id', 'Nacionalidad') !!}
        {!! Form::select('country_id', isset($country) ? $country->name : null, ['class' => 'form-control', 'placeholder' => 'Ingrese la nacionalidad de usuario']) !!}
    </div>--}}

    <div class="form-group col-3">
        {!! Form::label('document_type_id', 'Tipo de Documento') !!}
        {!! Form::select('document_type_id', isset($document_type) ? $document_type : null, ['class' => 'form-control btn-md']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-5">
        {!! Form::label('ci', 'Documento') !!}
        {!! Form::number('ci', isset($user) ? $user->ci : null, ['class' => 'form-control', 'placeholder' => 'Ingrese el numero de documento/cedula del usuario']) !!}
    </div>

    <div class="form-group col-5 ml-1">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', isset($user) ? $user->name : null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre completo de usuario']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-5">
        {!! Form::label('username', 'Usuario') !!}
        {!! Form::text('username', isset($user) ? $user->username : null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de usuario con el que se identificara en el sistema']) !!}
    </div>

    <div class="form-group col-5 ml-1">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', isset($user) ? $user->email : null, ['class' => 'form-control', 'placeholder' => 'Ingrese el email del usuario', 'type' => 'email']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-5">
        {!! Form::label('phone', 'Telefono') !!}
        {!! Form::text('phone', isset($user) ? $user->phone : null, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono del usuario']) !!}
    </div>

    <div class="form-group col-5 ml-1">
        {!! Form::label('address', 'Direccion') !!}
        {!! Form::text('address', isset($user) ? $user->address : null, ['class' => 'form-control', 'placeholder' => 'Ingrese su direccion']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-5">
        {!! Form::label('password', 'Contraseña') !!}
        {!! Form::input('password', 'password', isset($user) ? $user->password : null, ['class' => 'form-control', 'placeholder' => 'Ingrese su contraseña']) !!}
    </div>

    <div class="form-group col-5 ml-1">
        {!! Form::label('password_confirmation', 'Validacion de Contraseña') !!}
        {!! Form::input('password', 'password_confirmation', isset($user) ? $user->password : null, ['class' => 'form-control', 'placeholder' => 'Ingrese su contraseña nuevamente']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-5">
        {!! Form::label('type_id', 'Tipo de Funcionario') !!}
        {!! Form::select('type_id', isset($types) ? $types : ['description' => '...'], null, ['class' => 'form-control btn-md', 'id' => 'type_id']) !!}
    </div>

    <div class="form-group col-5">
        {!! Form::label('branch_id', 'Sucursal') !!}
        {!! Form::select('branch_id', isset($branch) ? $branch : ['description' => '...'], null, ['class' => 'form-control btn-md', 'id' => 'branch_id']) !!}
    </div>
</div>

{!! Form::hidden('status', 1) !!}

<button type="submit" class="btn btn-success btn-block"><a>{!! $btnLabel !!}</a></button>

<a href="{{ route('users.index') }}" class="btn btn-secondary btn-block">VOLVER</a>

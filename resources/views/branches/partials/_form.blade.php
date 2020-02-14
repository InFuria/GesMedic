@csrf

<div class="row">
    <div class="form-group col-5">
        {!! Form::label('code', 'Codigo') !!}
        {!! Form::number('code', isset($branch) ? $branch->ci : null, ['class' => 'form-control', 'placeholder' => 'Ingrese el codigo de la sucursal']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-5">
        {!! Form::label('department_id', 'Departamento') !!}
        {!! Form::select('department_id', isset($departments) ? $departments : ['name' => '...'], null, ['class' => 'form-control btn-md', 'id' => 'department_id']) !!}
    </div>

    <div class="form-group col-5 ml-1">
        {!! Form::label('address', 'Direccion') !!}
        {!! Form::text('address', isset($branch) ? $branch->address : null, ['class' => 'form-control', 'placeholder' => 'Ingrese su direccion']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-5">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', isset($branch) ? $branch->name : null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de sucursal']) !!}
    </div>
    <div class="form-group col-5">
        {!! Form::label('phone', 'Telefono') !!}
        {!! Form::text('phone', isset($branch) ? $branch->phone : null, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono del usuario']) !!}
    </div>
</div>

<button type="submit" class="btn btn-success btn-block"><a>{!! $btnLabel !!}</a></button>

<a href="{{ route('branches.index') }}" class="btn btn-secondary btn-block">VOLVER</a>

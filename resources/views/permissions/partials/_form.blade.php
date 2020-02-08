@csrf

<div class="row">
    <div class="form-group col-12">
        {{ Form::label('name', 'Nombre del permiso') }}
        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
    </div>
    <div class="form-group col-12">
        {{ Form::label('slug', 'Identificador') }}
        {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
    </div>
    <div class="form-group col-12">
        {{ Form::label('description', 'Descripción') }}
        {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => '3']) }}
    </div>
    <hr>

    <button type="submit" class="btn btn-success btn-block mt-2"><a>{!! $btnLabel !!}</a></button>

    <a href="{{ route('permissions.index') }}" class="btn btn-secondary btn-block">VOLVER</a>
</div>
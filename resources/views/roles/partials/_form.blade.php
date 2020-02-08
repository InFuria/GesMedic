
<div class="row">

    <div class="form-group col-6">
        {{ Form::label('name', 'Nombre del Rol') }}
        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
    </div>

    <div class="form-group col-6">
        {{ Form::label('slug', 'Identificador') }}
        {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
    </div>

    <div class="form-group col-12">
        {{ Form::label('description', 'Descripción') }}
        {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => '3']) }}
    </div>

    <div class="form-group col-12">
        <label>Permiso especial</label><br>

        <label class="btn btn-success rounded mr-1">{{ Form::radio('special', 'all-access') }} Acceso total</label>
        <label class="btn btn-danger rounded">{{ Form::radio('special', 'no-access') }} Ningún acceso</label>
        <label class="btn btn-info rounded text-white">{{ Form::radio('special', 'select', false, ['id' => 'permissionBtn']) }} Seleccionar Permisos</label>
    </div>

    <div class="form-group col-12" id="permissionsList">

    </div>

    {{--<h3>Lista de permisos</h3>
    <div class="form-group">
        <ul class="list-unstyled">
            @foreach($permissions as $permission)
                <li>
                    <label>
                        {{ Form::checkbox('permissions[]', $permission->id, null) }}
                        {{ $permission->name }}
                        <em>({{ $permission->description }})</em>
                    </label>
                </li>
            @endforeach
        </ul>
    </div>--}}

    <button type="submit" class="btn btn-success btn-block mt-2"><a>{!! $btnLabel !!}</a></button>

    <a href="{{ route('roles.index') }}" class="btn btn-secondary btn-block">VOLVER</a>
</div>
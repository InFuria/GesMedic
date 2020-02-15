<table class="table table-hover table-bordered" id="rolesTable">
    <thead>
    <tr>
        <th scope="col" style="border: none;">Identificador</th>
        <th scope="col" style="border: none;">Nombre</th>
        <th scope="col" style="border: none;">Descripcion</th>
        <th scope="col" style="border: none;">Creado</th>
        <th scope="col" style="border: none;">Modificado</th>
        <th scope="col" style="border: none;">Permiso Especial</th>
        <th scope="col" style="border: none;"></th>
    </tr>
    </thead>
    <tbody class="text-left">
    @foreach($roles as $role)
        <tr>
            <td>{{ $role->slug }}</td>
            <td>{{ $role->name }}</td>
            <td>{{ $role->description }}</td>
            <td>{{ $role->created_at }}</td>
            <td>{{ $role->updated_at }}</td>
            <td>
                @if($role->special == 'all-access')
                    <label class="btn btn-success rounded btn-sm">Acceso Total</label>
                @elseif($role->special == 'no-access')
                    <label class="btn btn-danger rounded btn-sm">Sin acceso</label>
                @else
                    <label class="btn btn-info rounded btn-sm">Detallado</label>
                @endif
            </td>
            <td>
                <a class="rounded fas fa-eye fa-lg borderless text-black-50" title="Ver detalles del rol" href="{{ route('roles.show', ['role' => $role->id]) }}"></a>
                <a class="rounded far fa-edit fa-lg borderless text-black-50" title="Editar rol" href="{{ route('roles.edit', ['role' => $role->id]) }}"></a>

                <a class="rounded fas fa-trash-alt fa-lg borderless text-black-50"
                   title="Eliminar rol"
                   data-toggle="modal"
                   data-target="#deleteModal"
                   data-id="{!! $role->id !!}"
                   data-name="{!! $role->name !!}"
                   style="cursor: hand"
                >
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
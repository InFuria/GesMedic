<table class="table table-hover table-bordered" id="permissionsTable">
    <thead>
    <tr>
        <th scope="col" style="border: none;">Identificador</th>
        <th scope="col" style="border: none;">Nombre</th>
        <th scope="col" style="border: none;">Descripcion</th>
        <th scope="col" style="border: none;">Creado</th>
        <th scope="col" style="border: none;">Modificado</th>
        <th scope="col" style="border: none;"></th>
    </tr>
    </thead>
    <tbody class="text-left">
    @foreach($permissions as $permission)
        <tr>
            <td>{{ $permission->slug }}</td>
            <td>{{ $permission->name }}</td>
            <td>{{ $permission->description }}</td>
            <td>{{ $permission->created_at }}</td>
            <td>{{ $permission->updated_at }}</td>
            <td>
                <a class="rounded fas fa-eye fa-lg borderless text-black-50" title="Ver detalles del permiso" href="{{ route('permissions.show', ['permission' => $permission->id]) }}"></a>
                <a class="rounded far fa-edit fa-lg borderless text-black-50" title="Editar permiso" href="{{ route('permissions.edit', ['permission' => $permission->id]) }}"></a>

                <a class="rounded fas fa-trash-alt fa-lg borderless text-black-50"
                   title="Eliminar permiso"
                   data-toggle="modal"
                   data-target="#deleteModal"
                   data-id="{!! $permission->id !!}"
                   data-name="{!! $permission->name !!}"
                   style="cursor: hand"
                >
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
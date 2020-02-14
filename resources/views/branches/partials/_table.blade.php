<table class="table table-hover table-bordered" id="branchesTable">
    <thead>
    <tr>
        <th scope="col" style="border: none;">Codigo</th>
        <th scope="col" style="border: none;">Nombre</th>
        <th scope="col" style="border: none;">Direccion</th>
        <th scope="col" style="border: none;">Telefono</th>
        <th scope="col" style="border: none;">Departamento</th>
    </tr>
    </thead>
    <tbody class="text-left">
    @foreach($branches as $branch)
        <tr>
            <td>{{ $branch->code }}</td>
            <td>{{ $branch->name }}</td>
            <td>{{ $branch->address }}</td>
            <td>{{ $branch->phone }}</td>
            <td>{{ $department [$branch->department_id - 1] }}</td>

            <td>
                <a class="rounded fas fa-eye fa-lg borderless text-black-50" title="Ver detalles de sucursal" href="{{ route('branches.show', ['branches' => $branch->id]) }}"></a>
                <a class="rounded far fa-edit fa-lg borderless text-black-50" title="Editar sucursal" href="{{ route('branches.edit', ['branches' => $branch->id]) }}"></a>

                <a class="rounded fas fa-trash-alt fa-lg borderless text-black-50"
                   title="Eliminar sucursal"
                   data-type="eliminar"
                   data-toggle="modal"
                   data-target="#deleteModal"
                   data-id="{!! $branch->id !!}"
                   data-name="{!! $branch->name !!}"
                   style="cursor: hand"
                >
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<table class="table table-hover table-bordered" id="usersTable">
    <thead>
    <tr>
        <th scope="col" style="border: none;">Ci</th>
        <th scope="col" style="border: none;">Usuario</th>
        <th scope="col" style="border: none;">Nombre</th>
        <th scope="col" style="border: none;">Tipo</th>
        <th scope="col" style="border: none;">Estado</th>
        <th scope="col" style="border: none;"></th>
    </tr>
    </thead>
    <tbody class="text-left">
        @foreach($users as $user)
            <tr>
                <td>{{ $user->ci }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->description }}</td>
                <td>
                    @if($user->status == 0)
                        <label class="bg-danger text-white rounded p-1 m-2">Deshabilitado</label>
                    @else
                        <label class="bg-success text-white rounded p-1 m-2">Habilitado</label>
                    @endif
                </td>
                <td>
                    <a class="rounded fas fa-eye fa-lg borderless text-black-50" title="Ver detalles de usuario" href="{{ route('users.show', ['user' => $user->id]) }}"></a>
                    <a class="rounded far fa-edit fa-lg borderless text-black-50" title="Editar usuario" href="{{ route('users.edit', ['user' => $user->id]) }}"></a>

                    <a class="rounded fas fa-trash-alt fa-lg borderless text-black-50"
                       title="Eliminar usuario"
                       data-type="eliminar"
                       data-toggle="modal"
                       data-target="#deleteModal"
                       data-id="{!! $user->id !!}"
                       data-username="{!! $user->username !!}"
                       style="cursor: hand"
                    >
                    </a>

                    @if($user->status == 1)
                        <a class="rounded fas fa-ban fa-lg borderless text-black-50" id="btnBan"
                           title="Deshabilitar usuario"
                           data-type="deshabilitar"
                           data-toggle="modal"
                           data-target="#statusModal"
                           data-id="{!! $user->id !!}"
                           data-username="{!! $user->username !!}"
                           style="cursor: hand"
                        >
                        </a>
                    @else
                        <a class="rounded fas fa-user-check fa-lg borderless text-black-50" id="btnBan"
                           title="Habilitar usuario"
                           data-type="habilitar"
                           data-toggle="modal"
                           data-target="#statusModal"
                           data-id="{!! $user->id !!}"
                           data-username="{!! $user->username !!}"
                           style="cursor: hand"
                        >
                        </a>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@extends('layouts.app')

@section('title', 'Roles')

@section('content')
    <div class="container">
        <div class="header">
            <h4>Gestion de Roles</h4>
        </div>

        <div id="panel" class="mb-1">
            <a class="btn btn-md bg-info text-black-50 rounded shadow" href="{{ route('roles.create') }}">Crear Rol</a>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                @include('roles.partials._table')
            </div>
        </div>
    </div>
@endsection

{{--@include('roles.partials._delete_modal')--}}

@section('js')
    <script>

        $(document).ready(function() {
            $('#rolesTable').DataTable(
                { language: {
                        /*searchPlaceholder: "Ingrese los datos a buscar",*/
                        "decimal":        "",
                        "emptyTable":     "No hay datos",
                        "info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
                        "infoEmpty":      "Mostrando 0 a 0 de 0 registros",
                        "infoFiltered":   "(Filtro de _MAX_ total registros)",
                        "infoPostFix":    "",
                        "thousands":      ",",
                        "lengthMenu":     "Mostrar: _MENU_",
                        "loadingRecords": "Cargando...",
                        "processing":     "Procesando...",
                        "search":         "Buscar:",
                        "zeroRecords":    "No se encontraron coincidencias",
                        "paginate": {
                            "first":      "Primero",
                            "last":       "Ultimo",
                            "next":       "Próximo",
                            "previous":   "Anterior"
                        },
                        "aria": {
                            "sortAscending":  ": Activar orden de columna ascendente",
                            "sortDescending": ": Activar orden de columna desendente"
                        }

                    }
                }
            );

            $('#rolesTable_filter').addClass('float-right');

            $('#rolesTable_filter label input').addClass('ml-3');

            $('#rolesTable_filter label').addClass('input-group d-flex align-items-center').append("<div class=\"input-group-prepend\"><span class=\"input-group-text rounded-right\"><i class=\"fas fa-search\"></i></span></div>");
        } );

        /*$('#deleteModal').on('show.bs.modal', function (event) {
            var button  = $(event.relatedTarget); // Button that triggered the modal
            var modal   = $(this);
            var title   = button.attr('title');
            var permission  = button.data('id');
            var name  = button.data('name');
            var message = 'Esta seguro que desea eliminar ' + 'el permiso "' + name + '"?';

            modal.find('.modal-title').text(title);
            modal.find('#modal-message').text(message);
            modal.find('#deleteForm').attr('action', '/permissions/' + permission);
        });*/
    </script>
@endsection

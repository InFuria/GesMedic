@extends('layouts.app')

@section('title', 'Sucursales')

@section('content')
    <div class="container">
        <div class="header">
            <h4>Listado de sucursales</h4>
        </div>

        <div id="panel" class="mb-1">
            <a class="btn btn-md bg-info text-black-50 rounded shadow" href="{{ route('branches.create') }}">Nueva Sucursal</a>
        </div>

        @if($branches->count() > 1 || $branches->isEmpty())
            <div class="card mt-3">
                <div class="card-body">
                    @include('branches.partials._table',['department' =>$departments ])
                </div>
            </div>
        @elseif($branches->count() == 1)

            <div class="card mt-3">
                <div class="card-body">
                    @include('branches.partials._showOnly', ['branch' => $branches->first(), 'departmentName' => $departmentName])
                </div>
            </div>
        @endif


    </div>
@endsection

@include('branches.partials._delete_modal')

@section('js')
    <script>

        $(document).ready(function() {
            $('#branchesTable').DataTable(
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

            $('#branchesTable_filter').addClass('float-right');

            $('#branchesTable_filter label input').addClass('ml-3');

            $('#branchesTable_filter label').addClass('input-group d-flex align-items-center').append("<div class=\"input-group-prepend\"><span class=\"input-group-text rounded-right\"><i class=\"fas fa-search\"></i></span></div>");
        } );

        $('#deleteModal').on('show.bs.modal', function (event) {
            var button  = $(event.relatedTarget); // Button that triggered the modal
            var modal   = $(this);
            var title   = button.attr('title');
            var branch  = button.data('id');
            var name  = button.data('name');
            var message = 'Esta seguro que desea eliminar a la sucursal ' + name + '?';

            modal.find('.modal-title').text(title);
            modal.find('#modal-message').text(message);
            modal.find('#deleteForm').attr('action', '/branches/' + branch);
        });
    </script>
@endsection

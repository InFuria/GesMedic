<div class="row">
    <div class="col-3">
        <i class="fas fa-store fa-10x"></i>
    </div>

    <div class="col-8 ml-5">
        <h4>{{$branch->name}}
            <small class="text-black-50 font-italic">
                (<cite title="codigo">{{ $branch->code }}
                    <i class="glyphicon glyphicon-map-marker"></i>
                </cite>)
            </small>
        </h4>
        <p>
            {{--<label class="font-weight-bolder font-italic">Email: </label>--}}
            <i class="fas fa-map-marked-alt mt-3"></i>
            &nbsp; {{ $branch->address }}
            <br>

            {{--<label class="font-weight-bolder font-italic">Telefono: </label>--}}
            <i class="fas fa-phone-alt mt-3"></i>
            &nbsp; {{ $branch->phone }}
            <br>

            {{--<label class="font-weight-bolder font-italic">Email: </label>--}}
            <i class="fas fa-city mt-3"></i>
            &nbsp; {{ $departmentName }}
            <br><br>

            <a class="rounded far fa-edit fa-lg borderless text-black-50" title="Editar sucursal"
               href="{{ route('branches.edit', ['branches' => $branch->id]) }}"></a>

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

        </p>

    </div>

</div>
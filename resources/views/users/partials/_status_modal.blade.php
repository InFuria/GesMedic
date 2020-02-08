<div id="statusModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title"></h3>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="statusForm">
                    @csrf
                    <h5 id="modal-message"></h5>
                </form>
            </div>

            <div class="modal-footer">
                <button type="submit" form="statusForm" id="confirm" class="btn "></button>
                <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="new" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="nuevo-cliente" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-success-subtle">
                <h1 class="modal-title fs-5 fw-bold" id="nuevo-cliente">Nuevo Cliente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="<?=base_url?>Client/save" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descripcion:</label>
                        <input type="text" class="form-control" id="description" name="description" required>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <input type="submit" class="btn btn-success" value="Guardar"></input>
                </form>
            </div>
        </div>
    </div>
</div>
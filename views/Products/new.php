<div class="modal fade" id="new" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="<?php isset($editar) ? 'editar-producto' : 'nuevo-producto'; ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-success-subtle">
                <?php if(isset($editar) && isset($prod) && is_object($prod)): ?>
                    <h1 class="modal-title fs-5 fw-bold" id="editar-producto">Editar Producto</h1>
                    <?php $url = base_url."product/edit&id=".$prod->id;?>
                <?php else: ?>
                    <h1 class="modal-title fs-5 fw-bold" id="nuevo-producto">Nuevo Producto</h1>
                    <?php $url = base_url."product/save";?>
                <?php endif; ?>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="<?=$url?>" method="POST">
                    <div class="mb-3">
                        <label for="cod" class="form-label">Codigo:</label>
                        <input type="text" class="form-control" id="cod" name="cod" value="<?php isset($prod) && is_object($prod) ? $prod->cod : ''; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php isset($prod) && is_object($prod) ? $prod->name : ''; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descripcion:</label>
                        <input type="text" class="form-control" id="description" name="description" value="<?php isset($prod) && is_object($prod) ? $prod->description : ''; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Precio:</label>
                        <input type="text" class="form-control" id="price" name="price" value="<?php isset($prod) && is_object($prod) ? $prod->price : ''; ?>" required>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <input type="submit" class="btn btn-success" value="Guardar"></input>
                </form>
            </div>
        </div>
    </div>
</div>

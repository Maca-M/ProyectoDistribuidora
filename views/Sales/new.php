<div class="modal fade" id="new" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="nueva-venta" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-success-subtle">
                <h1 class="modal-title fs-5 fw-bold" id="nueva-venta">Nueva Venta</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="<?=base_url?>sale/save" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Cliente:</label>
                        <select class="form-select" name="cliente">
                            <?php $clients = Utils::showClients(); ?>
                            <?php while ($client = $clients->fetch_object()): ?>
                                <option value="<?= $client->id; ?>">
                                    <?= $client->name . ", " . $client->description; ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Productos:</label>
                        <div>
                            <table class="table table-hover table-bordered">
                                <thead class="table-success">
                                    <tr>
                                        <th style="width: 3%;">
                                        </th>
                                        <th style="width: 10%;">
                                            Codigo
                                        </th>
                                        <th>
                                            Nombre
                                        </th>
                                        <th>
                                            Desc
                                        </th>
                                        <th style="width: 5%;">
                                            Precio
                                        </th>
                                    </tr>
                                </thead>
                                
                                <tbody class="table-group-divider">
                                    <?php $products = Utils::showProducts(); ?>
                                    <?php while ($prod = $products->fetch_object()): ?>
                                        <tr>
                                            <td>
                                                <input class="form-check-input" type="checkbox" value="<?= $prod->id; ?>" id="flexCheckDefault">
                                            </td>
                                            <td>
                                                <?= $prod->cod; ?>
                                            </td>
                                            <td>
                                                <?= $prod->name; ?>
                                            </td>
                                            <td>
                                                <?= $prod->description; ?>
                                            </td>
                                            <td>
                                                <?= $prod->price; ?>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <input type="submit" class="btn btn-success" value="Guardar"></input>
                </form>
            </div>
        </div>
    </div>
</div>
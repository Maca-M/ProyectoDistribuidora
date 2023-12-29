<h3 id="h3">Ventas</h3>

<button id="add" href="<?=base_url?>Sale/new" type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#new">
    <i class="bi bi-plus-lg"></i>
    Nueva Venta
</button>

<table class="table table-hover table-bordered">
    <thead class="table-success">
        <tr>
            <th>
                Codigo
            </th>
            <th>
               Cliente
            </th>
            <th>
                Total
            </th>
            <th>
               Fecha
            </th>
            <th>
                Opciones
            </th>
        </tr>
    </thead>
    
    <tbody class="table-group-divider">
    <?php while ($sale = $sales->fetch_object()): ?>
        <tr>
            <td>
                <?= $sale->id; ?>
            </td>
            <td>
                <?= $sale->client; ?>
            </td>
            <td>
                <?= $sale->total; ?>
            </td>
            <td>
                <?= $sale->date; ?>
            </td>
            <th>
                <button type="button" href="<?=base_url?>Sale/edit&id<?=$sale->id?>" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
            </th>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>

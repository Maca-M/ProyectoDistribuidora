<h3 id="h3">Ventas</h3>

<button id="add" href="<?=base_url?>Sale/new" type="button" class="btn btn-outline-success btn-sm">
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
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>

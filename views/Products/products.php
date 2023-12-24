<h3 id="h3">Productos</h3>

<button id="add" href="<?=base_url?>Product/new" type="button" class="btn btn-outline-success btn-sm">
    <i class="bi bi-plus-lg"></i>
    Nuevo Producto
</button>

<table class="table table-hover table-bordered">
    <thead class="table-success">
        <tr>
            <th>
                Codigo
            </th>
            <th>
                Nombre
            </th>
            <th>
                Desc
            </th>
            <th>
                Precio
            </th>
        </tr>
    </thead>
    
    <tbody class="table-group-divider">
    <?php while ($prod = $products->fetch_object()): ?>
        <tr>
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

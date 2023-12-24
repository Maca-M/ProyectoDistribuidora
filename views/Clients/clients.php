<h3 id="h3">Clientes</h3>

<button id="add" href="<?=base_url?>Client/new" type="button" class="btn btn-outline-success btn-sm">
    <i class="bi bi-plus-lg"></i>
    Nuevo Cliente
</button>

<table class="table table-hover table-bordered">
    <thead class="table-success">
        <tr>
            <th>
                Nombre
            </th>
            <th>
                Desc
            </th>
        </tr>
    </thead>
    
    <tbody class="table-group-divider">
    <?php while ($cli = $clients->fetch_object()): ?>
        <tr>
            <td>
                <?= $cli->name; ?>
            </td>
            <td>
                <?= $cli->description; ?>
            </td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
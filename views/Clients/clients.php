<h3 id="h3">Clientes</h3>

<button id="add" href="<?=base_url?>Client/new" type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#new">
    <i class="bi bi-plus-lg"></i>
    Nuevo Cliente
</button>

<table class="table table-hover table-bordered">
    <thead class="table-success">
        <tr>
            <th style="width: 50%;">
                Nombre
            </th>
            <th style="width: 50%;">
                Desc
            </th>
            <th>
                Opciones
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
            <th>
                <button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-pencil-square"></i></button>
                <button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-trash"></i></button>
            </th>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
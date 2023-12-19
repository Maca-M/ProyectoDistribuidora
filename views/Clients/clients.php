<h3 id="h3">Clientes</h3>
<table id="clients">
    <tr>
        <th>
            Nombre
        </th>
        <th>
            Desc
        </th>
    </tr>
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
</table>
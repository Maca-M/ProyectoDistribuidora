<h3 id="h3">Sales</h3>
<table id="sales">
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
</table>

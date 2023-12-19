<h3 id="h3">Productos</h3>
<table id="products">
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
</table>


<?php include_once(VIEWS . 'header.php') ?> //copiar de git
<?php $verify = false; $subtotal = 0; $send = 0; $discount = 0; $user_id = $data['user_id'] ?>
<h2 class="text-center">Carrito de compras</h2>
<from action="<?= ROOT ?>cart/update" method="POST">
    <table class="table table-stripped" width="100%">
        <tr>
            <th width="12%">Producto</th>
            <th width="58%">Descripcion</th>
            <th width="1.8%">Cant.</th>
            <th width="10.12">Precio</th>
            <th width="10.12">Subtotal</th>
            <th width="1"></th>
            <th width="6.5"></th>
        </tr>
        <?php foreach ($data['data'] as $key => $value): ?>
<tr>
    <td ><img src="<?= ROOT ?>img/"  value="" alt=""></td>
    <td width="58%">Descripcion</td>
    <td width="1.8%">Cant.</td>
    <td width="10.12">Precio</td>
    <td width="10.12">Subtotal</td>
    <td width="1"></td>
    <td width="6.5"></td>
</tr>
    </table>
</from>

<?php include_once(VIEWS . 'footer.php') ?>
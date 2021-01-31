<?php
include_once "base_de_datos.php";
$idventa = $_GET['idventa'];
$sentencia = $base_de_datos->query("SELECT ventas.total, fecha, ventas.vendedor, ventas.id, GROUP_CONCAT( productos.codigo, '..', productos.descripcion,'..', productos.precioVenta, '..', productos_vendidos.cantidad SEPARATOR '__') AS productos FROM ventas INNER JOIN productos_vendidos ON productos_vendidos.id_venta = ventas.id INNER JOIN productos ON productos.id = productos_vendidos.id_producto where ventas.id='" . $idventa . "';");
$ventas = $sentencia->fetchAll(PDO::FETCH_OBJ);

$subtotal = 0;
$subtotalfinal = 0;
$iva = 0;
$ivafinal = 0;

function redondear($valor, $decimales)
{
    $potencia = pow(10, $decimales);
    return round($valor * $potencia) / $potencia;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Venta No. <?php echo $idventa ?></title>
</head>

<body>

    <div class="detalles" name="detalles">
        <?php foreach ($ventas as $venta) { ?>
            <h3 align="center"><img src="http://localhost:8080/mal/MayLu/img/logito.jpg" width="250" height="150" alt="Img"><br>
                Av. Juárez #49, Local 3, Centro <br>San Pablo Huixtepec, Oaxaca <br>
                Facebook: Zapateria Ma y Lu <br>WhatsApp: 951 114 2171</h3>
            <h3 style="margin-left:60px;">Venta No. <?php echo $venta->id ?></h3>
            <h3 style="margin-left:60px;">Fecha y hora: <?php echo $venta->fecha ?></h3>
            <h3 style="margin-left:60px;">Vendedor: <?php echo $venta->vendedor ?></h3>
            <h4 style="margin-left:60px;">Productos</h4>
            <table align="center" class="table table-bordered" width="500">
                <thead>
                    <tr>
                        <th>Modelo</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Precio U.</th>
                        <th>Importe</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach (explode("__", $venta->productos) as $productosConcatenados) {
                        $producto = explode("..", $productosConcatenados)
                    ?>
                        <tr>
                            <td align="center"><?php echo $producto[0] ?></td>
                            <td align="center"><?php echo $producto[1] ?></td>
                            <td align="center"><?php echo $producto[3] ?></td>
                            <td align="center">$ <?php echo $producto[2] ?></td>
                            <td align="center">$ <?php echo ($producto[3] * $producto[2]) ?>.00</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <?php
            $subtotal = $venta->total / 1.16;
            $subtotalfinal = redondear($subtotal, 2);
            $iva = $venta->total - $subtotal;
            $ivafinal = redondear($iva, 2);
            ?>

            <br>
            <br>
            <br>

            <h2 align="right" style="margin-right:100px;"><strong> Total: $ <?php echo $venta->total ?></strong></h2>           
            <h3 align="right" style="margin-right:100px;">Subtotal: $ <?php echo $subtotalfinal; ?></h3>
            <h3 align="right" style="margin-right:100px;">Iva: $ <?php echo $ivafinal; ?></h3>
            
        <?php } ?>
        <br>
        <h2 align="center">¡Gracias por su Preferencia!</h2>
        <h3 align="center"><em>Nota: Salida la mercancia no se aceptan cambios ni devoluciones </em></h3>
        <br>
    </div>
    <a href="Punto-Venta-Admin.php?status=1">
</body>

</html>
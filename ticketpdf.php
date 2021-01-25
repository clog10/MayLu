<?php
include_once "base_de_datos.php";
$idventa = $_GET['idventa'];
$sentencia = $base_de_datos->query("SELECT ventas.total, fecha, ventas.vendedor, ventas.id, GROUP_CONCAT( productos.codigo, '..', productos.descripcion,'..', productos.precioVenta, '..', productos_vendidos.cantidad SEPARATOR '__') AS productos FROM ventas INNER JOIN productos_vendidos ON productos_vendidos.id_venta = ventas.id INNER JOIN productos ON productos.id = productos_vendidos.id_producto where ventas.id='" .$idventa."';");
$ventas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Ticket</title>
</head>

<body>

    <div class="detalles" name="detalles">
    <?php foreach ($ventas as $venta) { ?>
        <img src="img/logito.jpg" width="250" height="150" alt="Img">
        <h1>Detalles</h1>
        <h1>Venta No. <?php echo $venta->id ?></h1>
        <h3>Fecha y hora: <?php echo $venta->fecha ?></h3>
        <h3>Vendedor: <?php echo $venta->vendedor ?></h3>
        <h4>Productos</h4>
        
            <?php foreach (explode("__", $venta->productos) as $productosConcatenados) {
                $producto = explode("..", $productosConcatenados)
            ?>
                <h5><?php echo $producto [0]?></h5>
                <h5><?php echo $producto [1]?></h5>
                <h5><?php echo $producto [2]?></h5>
                <h5><?php echo $producto [3]?></h5>
            <?php } ?>

            <h3>Subtotal: </h3>
            <h3>Iva: </h3>
            <h3>Total: <?php echo $venta->total ?></h3>
        <?php } ?>
    </div>
</body>

</html>
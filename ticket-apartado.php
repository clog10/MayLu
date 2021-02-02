<?php
include_once "base_de_datos.php";
$idapartado = $_GET['id_apartado'];
$sentencia = $base_de_datos->query("SELECT * FROM `apartados` WHERE id_apartado='" . $idapartado. "';");
$apartados = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Apartado No. <?php echo $idapartado ?></title>
</head>

<body>
    <div class="detalles" name="detalles">
        <?php foreach ($apartados as $apartado) { ?>
            <h3 align="center"><img src="http://localhost:8080/mal/MayLu/img/logito.jpg" width="250" height="150" alt="Img"><br>
                Av. Juárez #49, Local 3, Centro <br>San Pablo Huixtepec, Oaxaca <br>
                Facebook: Zapateria Ma y Lu <br>WhatsApp: 951 114 2171</h3>
            <h3 style="margin-left:60px;">Apartado No. <?php echo $apartado->id_apartado ?></h3>
            <h3 style="margin-left:60px;">Fecha de Vencimiento: <?php echo $apartado->fecha ?></h3>
            <h3 style="margin-left:60px;">Cliente: <?php echo $apartado->cliente ?></h3>
            <h4 style="margin-left:60px;">Productos</h4>
            <table align="center" class="table table-bordered" width="500">
                <thead>
                    <tr>
                        <th>Modelo</th>
                        <th>Número</th>
                        <th>Color</th>
                        <th>Precio</th>
                        <th>Abono</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td align="center"><?php echo $apartado->modelo ?></td>
                            <td align="center"><?php echo $apartado->numero ?></td>
                            <td align="center"><?php echo $apartado->color ?></td>
                            <td align="center">$ <?php echo $apartado->precio ?></td>
                            <td align="center">$ <?php echo $apartado->abono ?>.00</td>
                        </tr>
                </tbody>
            </table>
            <br>
            <br>
            <h3 align="right" style="margin-right:100px;">Resta: $ <?php echo $apartado->saldo; ?></h3>
        <?php } ?>
        <br>
        <h2 align="center">¡Gracias por su Preferencia!</h2>
        <h3 align="center"><em>Nota: Tiene 15 días para completar su apartado  </em></h3>
        <br>
    </div>
    <a href="Punto-Venta-Admin.php?status=1">
</body>

</html>
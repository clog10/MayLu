<?php

include ("conexionBD.php");
//$conexion = mysqli_connect('localhost', 'root', '', 'bdmaylu')
//or die(mysql_error($mysqli));

//insertar($conexion);

//function insertar($conexion) {
if(isset($_POST['guardar'])){
    $modelo = $_POST['modelo'];
    $talla = $_POST['talla'];
    $color = $_POST['color'];
    $precio_compra = $_POST['precio_compra'];
    $precio_venta = $_POST['precio_venta'];
    $stock = $_POST['stock'];   

    $consulta = "INSERT INTO zapato(modelo, talla, color, precio_compra, precio_venta, stock)
    VALUES ('$modelo','$talla', '$color', '$precio_compra', '$precio_venta', '$stock')";
    $result = mysqli_query($conexion, $consulta);
    if(!$result){
        die('mal');
    }
    //$_SESSION ['message'] = 'Registro agregado';
    //$_SESSION ['message_type'] = 'success';

    header("Location: /MayLu/AdminNProducto.php");
}


?>
<?php

include ("conexionBD.php");
//$conexion = mysqli_connect('localhost', 'root', '', 'bdmaylu')
//or die(mysql_error($mysqli));

//insertar($conexion);

//function insertar($conexion) {
if(isset($_POST['guardar'])){
    $nombre_codigo = $_POST['nombre_codigo'];
    $efectivo = $_POST['efectivo'];

    $consulta = "INSERT INTO caja(nombre_codigo, efectivo)
    VALUES ('$nombre_codigo','$efectivo')";
    $result = mysqli_query($conexion, $consulta);
    if(!$result){
        die('mal');
    }
    //$_SESSION ['message'] = 'Registro agregado';
    //$_SESSION ['message_type'] = 'success';

    header("Location: /MayLu/AdminCaja.php");
}


?>
<?php

include ("conexionBD.php");
//$conexion = mysqli_connect('localhost', 'root', '', 'bdmaylu')
//or die(mysql_error($mysqli));

//insertar($conexion);

//function insertar($conexion) {
if(isset($_POST['guardar'])){
    $nombre_empresa = $_POST['nombre_empresa'];
    $nombre_agente = $_POST['nombre_agente'];
    $direccion = $_POST['direccion'];
    $tel = $_POST['tel'];
    $email = $_POST['email']; 

    $consulta = "INSERT INTO proveedor(nombre_empresa, nombre_agente, direccion, tel, email)
    VALUES ('$nombre_empresa','$nombre_agente', '$direccion', '$tel', '$email')";
    $result = mysqli_query($conexion, $consulta);
    if(!$result){
        die('mal');
    }
    //$_SESSION ['message'] = 'Registro agregado';
    //$_SESSION ['message_type'] = 'success';

    header("Location: /MayLu/AdminProveedor.php");
}


?>
<?php

include ("conexionBD.php");
//$conexion = mysqli_connect('localhost', 'root', '', 'bdmaylu')
//or die(mysql_error($mysqli));

//insertar($conexion);

//function insertar($conexion) {
if(isset($_POST['guardar'])){
    $nombre_com = $_POST['nombre_com'];
    $puesto = $_POST['puesto'];
    $id_caja = $_POST['id_caja'];
    $genero = $_POST['genero'];
    $direccion = $_POST['direccion'];
    $tel = $_POST['tel'];   
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];   

    $consulta = "INSERT INTO usuario(nombre_com, puesto, id_caja, genero, direccion, tel, email, usuario, contra)
    VALUES ('$nombre_com','$puesto', '$id_caja', '$genero', '$direccion', '$tel', '$email', '$usuario', '$contra')";
    $result = mysqli_query($conexion, $consulta);
    if(!$result){
        die('mal');
    }
    //$_SESSION ['message'] = 'Registro agregado';
    //$_SESSION ['message_type'] = 'success';

    header("Location: /MayLu/AdminUsuario.php");
}


?>
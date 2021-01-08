<?php

include ("conexionBD.php");

if(isset($_GET['id_usuario'])){
    $id_usuario = $_GET['id_usuario'];
    $consulta = "DELETE FROM usuario WHERE id_usuario = $id_usuario";
    $result = mysqli_query($conexion, $consulta);
    if(!$result){
        die('mal');
    }
    //$_SESSION['message'] = 'Registro eliminado';
    //$_SESSION['message_type'] = 'danger';

    header("Location: /MayLu/AdminUsuario.php");
}

?>
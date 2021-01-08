<?php

include ("conexionBD.php");

if(isset($_GET['id_zapato'])){
    $id_zapato = $_GET['id_zapato'];
    $consulta = "DELETE FROM zapato WHERE id_zapato = $id_zapato";
    $result = mysqli_query($conexion, $consulta);
    if(!$result){
        die('mal');
    }
    //$_SESSION['message'] = 'Registro eliminado';
    //$_SESSION['message_type'] = 'danger';

    header("Location: /MayLu/AdminNProducto.php");
}

?>
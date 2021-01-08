<?php

include ("conexionBD.php");

if(isset($_GET['id_caja'])){
    $id_caja = $_GET['id_caja'];
    $consulta = "DELETE FROM caja WHERE id_caja = $id_caja";
    $result = mysqli_query($conexion, $consulta);
    if(!$result){
        die('mal');
    }
    //$_SESSION['message'] = 'Registro eliminado';
    //$_SESSION['message_type'] = 'danger';

    header("Location: /MayLu/AdminCaja.php");
}

?>
<?php

include ("conexionBD.php");

if(isset($_GET['id_proveedor'])){
    $id_proveedor = $_GET['id_proveedor'];
    $consulta = "DELETE FROM proveedor WHERE id_proveedor = $id_proveedor";
    $result = mysqli_query($conexion, $consulta);
    if(!$result){
        die('mal');
    }
    //$_SESSION['message'] = 'Registro eliminado';
    //$_SESSION['message_type'] = 'danger';

    header("Location: /MayLu/AdminProveedor.php");
}

?>
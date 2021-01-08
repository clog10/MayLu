<?php

include ("conexionBD.php");
//$conexion = mysqli_connect('localhost', 'root', '', 'bdmaylu')


if(isset($_GET['id_proveedor'])){
    $id_proveedor = $_GET['id_proveedor'];

    $consulta = "SELECT * FROM proveedor WHERE id_proveedor = $id_proveedor";
    $result = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre_empresa = $row['nombre_empresa'];
        $nombre_agente = $row['nombre_agente'];
        $direccion = $row['direccion'];
        $tel = $row['tel'];
        $email = $row['email'];
        //echo $modelo;
        //echo $modelo;
        //echo $talla;
        //echo $color;
        //echo $precio_compra;
        //echo $precio_venta;
        //echo $stock;   

    }
}

if(isset($_POST['actualizar'])){
    $id_proveedor = $_GET['id_proveedor'];
    $nombre_empresa = $_POST['nombre_empresa'];
    $nombre_agente = $_POST['nombre_agente'];
    $direccion = $_POST['direccion'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    $consulta = "UPDATE proveedor set nombre_empresa = '$nombre_empresa', nombre_agente = '$nombre_agente', 
    direccion = '$direccion', tel = '$tel', email = '$email' WHERE id_proveedor = $id_proveedor";

    mysqli_query($conexion, $consulta);
    header("Location: /MayLu/AdminProveedor.php");

}

?>

<div id="container">
        <div class="overlay2" id="overlay2">
            <div class="popup2" id="popup2">
                <a href="#" id="btn-cerrar-popup2" class="btn-cerrar-popup2"><i class="fas fa-times"></i></a>
                <h3>Actualizar Proveedor</h3>
                <h4>Ingresa los datos</h4>
                <form action="editProveedor.php?id_proveedor=<?php echo $_GET['id_proveedor'];?>" method="POST">
                    <div class="contenedor-etiquetas2">
                        <h4>Nombre</h4>
                        <h4>Agente</h4>
                        <h4>Direccion</h4>
                        <h4>Telefono</h4>
                        <h4>Correo</h4>
                    </div>
                    <div class="contenedor-inputs2">

                        <input type="text" name="nombre_empresa" value="<?php echo $nombre_empresa; ?>" placeholder="Nombre de la empresa" >

                        <input type="text" name="nombre_agente" value="<?php echo $nombre_agente; ?>" placeholder="Nombre del agente">

                        <input type="text" name= "direccion" value="<?php echo $direccion; ?>" placeholder="Direccion">

                        <input type="text" name="tel" value="<?php echo $tel; ?>" placeholder="Telefono">

                        <input type="text" name= "email" value="<?php echo $email; ?>" placeholder="Correo electrónico">

                    </div>
                    <br>
                    <input type="submit" class="btn-submit" name="actualizar" value="Actualizar">
                </form>
            </div>
        </div>
    </div>

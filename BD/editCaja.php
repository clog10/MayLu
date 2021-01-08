<?php

include ("conexionBD.php");
//$conexion = mysqli_connect('localhost', 'root', '', 'bdmaylu')


if(isset($_GET['id_caja'])){
    $id_caja = $_GET['id_caja'];

    $consulta = "SELECT * FROM caja WHERE id_caja = $id_caja";
    $result = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre_codigo = $row['nombre_codigo'];
        $efectivo = $row['efectivo'];
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
    $id_caja = $_GET['id_caja'];
    $nombre_codigo = $_POST['nombre_codigo'];
    $efectivo = $_POST['efectivo'];

    $consulta = "UPDATE caja set nombre_codigo = '$nombre_codigo', efectivo = '$efectivo' WHERE id_caja = $id_caja";

    mysqli_query($conexion, $consulta);
    header("Location: /MayLu/AdminCaja.php");

}

?>

<div id="container">
        <div class="overlay2" id="overlay2">
            <div class="popup2" id="popup2">
                <a href="#" id="btn-cerrar-popup2" class="btn-cerrar-popup2"><i class="fas fa-times"></i></a>
                <h3>Actualizar Caja</h3>
                <h4>Ingresa los datos</h4>
                <form action="editCaja.php?id_caja=<?php echo $_GET['id_caja'];?>" method="POST">
                    <div class="contenedor-etiquetas2">
                        <h4>Nombre o codigo de caja</h4>
                        <h4>Efectivo</h4>
                    </div>
                    <div class="contenedor-inputs2">

                        <input type="text" name="nombre_codigo" value="<?php echo $nombre_codigo; ?>" placeholder="Nombre o codigo de caja" >

                        <input type="text" name="efectivo" value="<?php echo $efectivo; ?>" placeholder="Cantidad de efectivo">

                    </div>

                    <br>
                    <input type="submit" class="btn-submit" name="actualizar" value="Actualizar">
                </form>
            </div>
        </div>
    </div>

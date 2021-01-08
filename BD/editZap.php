<?php

include ("conexionBD.php");
//$conexion = mysqli_connect('localhost', 'root', '', 'bdmaylu')


if(isset($_GET['id_zapato'])){
    $id_zapato = $_GET['id_zapato'];

    $consulta = "SELECT * FROM zapato WHERE id_zapato = $id_zapato";
    $result = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $modelo = $row['modelo'];
        $talla = $row['talla'];
        $color = $row['color'];
        $precio_compra = $row['precio_compra'];
        $precio_venta = $row['precio_venta'];
        $stock = $row['stock'];   
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
    $id_zapato = $_GET['id_zapato'];
    $modelo = $_POST['modelo'];
    $talla = $_POST['talla'];
    $color = $_POST['color'];
    $precio_compra = $_POST['precio_compra'];
    $precio_venta = $_POST['precio_venta'];
    $stock = $_POST['stock'];   

    $consulta = "UPDATE zapato set modelo = '$modelo', talla = '$talla', color = '$color', precio_compra = '$precio_compra', precio_venta = '$precio_venta', stock = '$stock' WHERE id_zapato = $id_zapato";

    mysqli_query($conexion, $consulta);
    header("Location: /MayLu/AdminNProducto.php");

}

?>

<div id="container">
        <div class="overlay2" id="overlay2">
            <div class="popup2" id="popup2">
                <a href="#" id="btn-cerrar-popup2" class="btn-cerrar-popup2"><i class="fas fa-times"></i></a>
                <h3>Actualizar Producto</h3>
                <h4>Ingresa los datos</h4>
                <form action="editZap.php?id_zapato=<?php echo $_GET['id_zapato'];?>" method="POST">
                    <div class="contenedor-etiquetas2">
                        <h4>Codigo P</h4>
                        <h4>Proveedor</h4>
                        <h4>Talla</h4>
                        <h4>Color</h4>
                        <h4>Precio Compra</h4>
                        <h4>Precio Venta</h4>
                        <h4>Stock</h4>
                    </div>
                    <div class="contenedor-inputs2">

                        <input type="text" name="modelo" value="<?php echo $modelo; ?>" placeholder="Codigo P" >

                        <select name="Proveedor" class="select">
                            <option selected value="0"> Elige una opción </option>
                            <option value="1">Windows Vista</option>
                            <option value="2">Windows 7</option>
                            <option value="3">Windows XP</option>
                            <option value="10">Fedora</option>
                            <option value="11">Debian</option>
                            <option value="12">Suse</option>
                        </select>

                        <input type="text" name="talla" value="<?php echo $talla; ?>" placeholder="Talla">

                        <input type="text" name= "color" value="<?php echo $color; ?>" placeholder="Color">

                        <input type="text" name="precio_compra" value="<?php echo $precio_compra; ?>" placeholder="Precio Compra">

                        <input type="text" name= "precio_venta" value="<?php echo $precio_venta; ?>" placeholder="Precio Venta">

                        <input type="text" name="stock" value="<?php echo $stock; ?>" placeholder="Stock">
                    </div>
                    <div class="contenedor-imagen">
                        <input type="file" placeholder="Cargar">
                    </div>
                    <br>
                    <input type="submit" class="btn-submit" name="actualizar" value="Actualizar">
                </form>
            </div>
        </div>
    </div>

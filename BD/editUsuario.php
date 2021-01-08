<?php

include ("conexionBD.php");
//$conexion = mysqli_connect('localhost', 'root', '', 'bdmaylu')


if(isset($_GET['id_usuario'])){
    $id_usuario = $_GET['id_usuario'];

    $consulta = "SELECT * FROM usuario WHERE id_usuario= $id_usuario";
    $result = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre_com = $row['nombre_com'];
        $puesto = $row['puesto'];
        $id_caja = $row['id_caja'];
        $genero = $row['genero'];
        $direccion = $row['direccion'];
        $tel = $row['tel'];
        $email = $row['email'];   
        $usuario = $row['usuario'];
        $contra = $row['contra'];   
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
    $id_usuario = $_GET['id_usuario'];
    $nombre_com = $_POST['nombre_com'];
    $puesto = $_POST['puesto'];
    $id_caja = $_POST['id_caja'];
    $genero = $_POST['genero'];
    $direccion = $_POST['direccion'];
    $tel = $_POST['tel'];  
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];    
    $contra = $_POST['contra'];  

    $consulta = "UPDATE usuario set nombre_com = '$nombre_com', puesto = '$puesto', id_caja = '$id_caja', 
    genero = '$genero', direccion = '$direccion', tel = '$tel', email = '$email', usuario = '$usuario', contra = '$contra'
    WHERE id_usuario = $id_usuario";

    mysqli_query($conexion, $consulta);
    header("Location: /MayLu/AdminUsuario.php");

}

?>

<div id="container">
        <div class="overlay2" id="overlay2">
            <div class="popup2" id="popup2">
                <a href="#" id="btn-cerrar-popup2" class="btn-cerrar-popup2"><i class="fas fa-times"></i></a>
                <h3>Actualizar Usuario</h3>
                <h4>Ingresa los datos</h4>
                <form action="editUsuario.php?id_usuario=<?php echo $_GET['id_usuario'];?>" method="POST">
                    <div class="contenedor-etiquetas2">
                        <h4>Nombre comp.</h4>
                        <h4>Puesto</h4>
                        <h4>Caja</h4>
                        <h4>Genero</h4>
                        <h4>Dirección</h4>
                        <h4>Teléfono</h4>
                        <h4>Correo</h4>
                        <h4>Usuario</h4>
                        <h4>Contraseña</h4>
                    </div>
                    <div class="contenedor-inputs2">

                    <input type="text" name = "nombre_com"  value="<?php echo $nombre_com; ?>" placeholder="Nombre completo">
                        <select name="puesto"  value="<?php echo $puesto; ?>" class="select">
                            <option selected value="0"> Elige una opción </option>
                            <option value="1">Admistrador</option>
                            <option value="2">Vendedor</option>
                            <option value="3">Almacenista</option>
                        </select>
                        <select name="id_caja"  value="<?php echo $id_caja; ?>" class="select">
                            <option selected value="0"> Elige una opción </option>
                            <option value="1">Caja</option>
                        </select>
                        <select name="genero"  value="<?php echo $genero; ?>" class="select">
                            <option selected value="0"> Elige una opción </option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                        </select>
                        <input type="text" name="direccion"  value="<?php echo $direccion; ?>" placeholder="Dirección">
                        <input type="text" name="tel"  value="<?php echo $tel; ?>" placeholder="Teléfono">
                        <input type="text" name="email"  value="<?php echo $email; ?>" placeholder="Correo electrónico">
                        <input type="text" name="usuario"  value="<?php echo $usuario; ?>" placeholder="Usuario">
                        <input type="text" name="contra"  value="<?php echo $contra; ?>" placeholder="Contraseña">
                    </div>
                    <br>
                    <input type="submit" class="btn-submit" name="actualizar" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
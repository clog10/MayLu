<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["nombre_com"]) || 
	!isset($_POST["puesto"]) || 
	!isset($_POST["id_caja"]) || 
	!isset($_POST["genero"]) || 
	!isset($_POST["direccion"]) || 
	!isset($_POST["tel"]) || 
	!isset($_POST["usuario"]) || 
	!isset($_POST["contra"]) || 
	!isset($_POST["id_usuario"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id_usuario = $_POST["id_usuario"];
$nombre_com = $_POST["nombre_com"];
$puesto = $_POST["puesto"];
$id_caja = $_POST["id_caja"];
$genero = $_POST["genero"];
$direccion = $_POST["direccion"];
$tel = $_POST["tel"];
$usuario = $_POST["usuario"];
$contra = $_POST["contra"];

$sentencia = $base_de_datos->prepare("UPDATE usuario SET nombre_com = ?, puesto = ?,id_caja = ?, genero = ?, direccion = ?, tel = ?, usuario = ?,contra = ? WHERE id_usuario = ?;");
$resultado = $sentencia->execute([$nombre_com, $puesto, $id_caja,$genero, $direccion, $tel, $usuario,$contra, $id_usuario]);

if($resultado === TRUE){
	header("Location: ./Usuario-Administrador.php?pagina=1.php" );
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";

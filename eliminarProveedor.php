<?php
if(!isset($_GET["id_proveedor"])) exit();
$id_proveedor = $_GET["id_proveedor"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM proveedor WHERE id_proveedor = ?;");
$resultado = $sentencia->execute([$id_proveedor]);
if($resultado === TRUE){
	header("Location: ./Proveedor-Administrador.php");
	exit;
}
else echo "Algo salió mal";
?>
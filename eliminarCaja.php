<?php
if(!isset($_GET["id_caja"])) exit();
$id_caja = $_GET["id_caja"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM caja WHERE id_caja = ?;");
$resultado = $sentencia->execute([$id_caja]);
if($resultado === TRUE){
	header("Location: ./AdminCaja.php");
	exit;
}
else echo "Algo salió mal";
?>
<?php

if(!isset($_GET["id_apart"]));
$id = $_GET["id_apart"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM apartados WHERE id_apartado = ?;");
$resultado = $sentencia->execute([$id]);
if($resultado === TRUE){
	header("Location: ./apartado.php");
	exit;
}
else echo "Algo salió mal";
?>
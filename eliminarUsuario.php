<?php
if(!isset($_GET["id_usuario"])) exit();
$id_usuario = $_GET["id_usuario"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM usuario WHERE id_usuario = ?;");
$resultado = $sentencia->execute([$id_usuario]);
if($resultado === TRUE){
	header("Location: ./Usuario-Administrador.php");
	exit;
}
else echo "Algo salió mal";
?>
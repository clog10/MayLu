<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["nombre_empresa"]) || 
	!isset($_POST["nombre_agente"]) || 
	!isset($_POST["direccion"]) || 
	!isset($_POST["tel"]) || 
	!isset($_POST["email"]) || 
	!isset($_POST["id_proveedor"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id_proveedor = $_POST["id_proveedor"];
$nombre_empresa = $_POST["nombre_empresa"];
$nombre_agente = $_POST["nombre_agente"];
$direccion = $_POST["direccion"];
$tel = $_POST["tel"];
$email = $_POST["email"];

$sentencia = $base_de_datos->prepare("UPDATE proveedor SET nombre_empresa = ?, nombre_agente = ?,direccion = ?, tel = ?, email = ? WHERE id_proveedor = ?;");
$resultado = $sentencia->execute([$nombre_empresa, $nombre_agente, $direccion,$tel, $email, $id_proveedor]);

if($resultado === TRUE){
	header("Location: ./Proveedor-Administrador.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";

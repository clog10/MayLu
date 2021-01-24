<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["nombre_codigo"]) || 
	!isset($_POST["efectivo"]) || 
	!isset($_POST["id_caja"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id_caja = $_POST["id_caja"];
$nombre_codigo = $_POST["nombre_codigo"];
$efectivo = $_POST["efectivo"];

$sentencia = $base_de_datos->prepare("UPDATE caja SET nombre_codigo = ?, efectivo = ? WHERE id_caja = ?;");
$resultado = $sentencia->execute([$nombre_codigo, $efectivo, $id_caja]);

if($resultado === TRUE){
	header("Location: ./AdminCaja.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";

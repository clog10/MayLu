<?php

#Salir si alguno de los datos no está presente
if(
    !isset($_POST["fecha"]) || 
    !isset($_POST["modelo"]) || 
    !isset($_POST["cliente"]) || 
    !isset($_POST["numero"]) || 
    !isset($_POST["color"]) || 
	!isset($_POST["precio"]) || 
	!isset($_POST["abono"]) || 
	!isset($_POST["saldo"]) || 
	!isset($_POST["id_apartado"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id_apartado = $_POST["id_apartado"];
$fecha = $_POST["fecha"];
$modelo = $_POST["modelo"];
$cliente = $_POST["cliente"];
$numero = $_POST["numero"];
$color = $_POST["color"];
$precio = $_POST["precio"];
$abono = $_POST["abono"];
$saldo = $_POST["saldo"];

$sentencia = $base_de_datos->prepare("UPDATE apartados SET fecha = ?, modelo = ?,cliente = ?, numero = ? ,color = ?, precio = ? , abono = ?, saldo = ?  WHERE id_apartado = ?;");
$resultado = $sentencia->execute([$fecha, $modelo,$cliente, $numero,$color, $precio, $abono, $saldo, $id_apartado]);

if($resultado === TRUE){
	header("Location: ./apartado.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";

<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["nombre_codigo"]) || !isset($_POST["efectivo"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$nombre_codigo = $_POST["nombre_codigo"];
$efectivo = $_POST["efectivo"];


$sentencia = $base_de_datos->prepare("INSERT INTO caja(nombre_codigo, efectivo) VALUES (?,?);");
$resultado = $sentencia->execute([$nombre_codigo, $efectivo]);

if($resultado === TRUE){
	header("Location: ./AdminCaja.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
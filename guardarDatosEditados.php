<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["codigo"]) || 
	!isset($_POST["descripcion"]) || 
	!isset($_POST["talla"]) || 
	!isset($_POST["color"]) || 
	!isset($_POST["precioCompra"]) || 
	!isset($_POST["precioVenta"]) || 
	!isset($_POST["existencia"]) || 
	!isset($_POST["proveedor"]) || 
	!isset($_POST["id"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id = $_POST["id"];
$codigo = $_POST["codigo"];
$descripcion = $_POST["descripcion"];
$talla = $_POST["talla"];
$color = $_POST["color"];
$precioCompra = $_POST["precioCompra"];
$precioVenta = $_POST["precioVenta"];
$existencia = $_POST["existencia"];
$proveedor = $_POST["proveedor"];

$sentencia = $base_de_datos->prepare("UPDATE productos SET codigo = ?, descripcion = ?,talla = ?, color = ?, precioCompra = ?, precioVenta = ?, existencia = ?,proveedor = ? WHERE id = ?;");
$resultado = $sentencia->execute([$codigo, $descripcion, $talla,$color, $precioCompra, $precioVenta, $existencia,$proveedor, $id]);

if($resultado === TRUE){
	header("Location: ./Inventario-Administrador.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";

<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["nombre_com"]) || !isset($_POST["puesto"]) || !isset($_POST["id_caja"]) || !isset($_POST["genero"]) || !isset($_POST["direccion"]) || !isset($_POST["tel"]) || !isset($_POST["usuario"]) || !isset($_POST["contra"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$nombre_com = $_POST["nombre_com"];
$puesto = $_POST["puesto"];
$id_caja = $_POST["id_caja"];
$genero = $_POST["genero"];
$direccion = $_POST["direccion"];
$tel = $_POST["tel"];
$usuario = $_POST["usuario"];
$contra = $_POST["contra"];

$sentencia = $base_de_datos->prepare("INSERT INTO usuario(nombre_com, puesto, id_caja,genero,direccion,  tel, usuario, contra) VALUES (?,?, ?, ?, ?, ?,?,?);");
$resultado = $sentencia->execute([$nombre_com, $puesto,$id_caja, $genero, $direccion, $tel, $usuario,$contra]);

if($resultado === TRUE){
	header("Location: ./Usuario-Administrador.php?pagina=1");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
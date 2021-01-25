<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","ventas");

$consulta="select * from usuario where usuario='$usuario' and contra='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['puesto']==1){
//if(isset($filas['puesto'])==1){
    header("location:principal-admin.php");

}else
if($filas['puesto']== 2){
//if(isset($filas['puesto'])== 2){
    header("location:principal-vendedor.php");


}else
//if(isset($filas['puesto'])== 3){
if($filas['puesto']== 3){
    header("location:principal-almacen.php");

}
else{
    ?>
    <?php
    include("login.php");
    ?>
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);

<?php
include("base.php");
 $fecha=$_POST['fecha'];
 $modelo=$_POST['modelo'];
 $cliente=$_POST['cliente'];
 $numero=$_POST['numero'];
 $color=$_POST['color'];
 $precio=$_POST['precio'];
 $abono=$_POST['abono'];
 $saldo=$_POST['saldo'];

 $insertar="INSERT INTO apartados(fecha, modelo, cliente, numero, color, precio, abono, saldo) VALUES ('$fecha','$modelo','$cliente','$numero','$color','$precio','$abono','$saldo')";

$resultado=mysqli_query($conexion, $insertar);
 
        if($resultado){
            header("Location: ./apartado.php");
            //echo "<script>alert('se realizo su apartado con éxito');</script>";
        }else{
            echo "<script>('no se pudo apartar');window.histoyr.go(-1)</script>";
        }
?>
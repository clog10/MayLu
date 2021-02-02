<?php
include("base.php");
$fecha = $_POST['fecha'];
$modelo = $_POST['modelo'];
$cliente = $_POST['cliente'];
$numero = $_POST['numero'];
$color = $_POST['color'];
$precio = $_POST['precio'];
$abono = $_POST['abono'];
$saldo = $_POST['saldo'];

$insertar = "INSERT INTO apartados(fecha, modelo, cliente, numero, color, precio, abono, saldo) VALUES ('$fecha','$modelo','$cliente','$numero','$color','$precio','$abono','$saldo')";

$resultado = mysqli_query($conexion, $insertar);

include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT id_apartado FROM apartados ORDER BY id_apartado DESC LIMIT 1;");
$sentencia->execute();
$valor = $sentencia->fetch(PDO::FETCH_OBJ);

$idApartado = $valor === false ? 1 : $valor->id_apartado;
/*
if ($resultado) {
    header("Location: ./apartado.php");
    //echo "<script>alert('se realizo su apartado con éxito');</script>";
} else {
    echo "<script>('no se pudo apartar');window.histoyr.go(-1)</script>";
}
*/

// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// Introducimos HTML de prueba
function file_get_contents_curl($url)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

$html = file_get_contents("http://localhost:8080/mal/MayLu/ticket-apartado.php?id_apartado=" . $idApartado);

$options = new Options();
$options->set('isRemoteEnabled', TRUE);

// Instanciamos un objeto de la clase DOMPDF.
$pdf = new DOMPDF($options);

// Definimos el tamaño y orientación del papel que queremos.
$pdf->set_paper("letter", "portrait");
//$pdf->set_paper(array(0,0,104,250));

// Cargamos el contenido HTML.
$pdf->load_html($html);

// Renderizamos el documento PDF.
$pdf->render();

// Enviamos el fichero PDF al navegador.
$pdf->stream('Reporte-de-Apartado.pdf');


if ($resultado) {
    header("Location: ./apartado.php");
    //echo "<script>alert('se realizo su apartado con éxito');</script>";
} else {
    echo "<script>('no se pudo apartar');window.histoyr.go(-1)</script>";
}
<?php
if(!isset($_POST["total"])) exit;

session_start();

$total = $_POST["total"];
include_once "base_de_datos.php";

$vendedor = "Carlos Loaeza";

$ahora = date_default_timezone_set("America/Mexico_City");
$ahora = date("Y-m-d H:i:s");

$sentencia = $base_de_datos->prepare("INSERT INTO ventas(fecha, total, vendedor) VALUES (?, ?, ?);");
$sentencia->execute([$ahora, $total, $vendedor]);

$sentencia = $base_de_datos->prepare("SELECT id FROM ventas ORDER BY id DESC LIMIT 1;");
$sentencia->execute();
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);

$idVenta = $resultado === false ? 1 : $resultado->id;

$base_de_datos->beginTransaction();
$sentencia = $base_de_datos->prepare("INSERT INTO productos_vendidos(id_producto, id_venta, cantidad) VALUES (?, ?, ?);");
$sentenciaExistencia = $base_de_datos->prepare("UPDATE productos SET existencia = existencia - ? WHERE id = ?;");
foreach ($_SESSION["carrito"] as $producto) {
	$total += $producto->total;
	$sentencia->execute([$producto->id, $idVenta, $producto->cantidad]);
	$sentenciaExistencia->execute([$producto->cantidad, $producto->id]);
}
$base_de_datos->commit();
unset($_SESSION["carrito"]);
$_SESSION["carrito"] = [];

// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
use Dompdf\Options;

// Introducimos HTML de prueba
function file_get_contents_curl($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
    
}

 $html=file_get_contents("http://localhost/MayLu/ticketpdf.php?idventa=".$idVenta);

$options = new Options();
$options->set('isRemoteEnabled',TRUE);

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
$pdf->stream('Reporte-de-Venta.pdf');

header("Refresh:0; url=Punto-Venta-Admin.php");
#header("Location: ./Punto-Venta-Admin.php?status=1");


?>
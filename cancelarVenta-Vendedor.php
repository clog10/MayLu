<?php

session_start();

unset($_SESSION["carrito"]);
$_SESSION["carrito"] = [];

header("Location: ./Punto-Venta-Vendedor.php?status=2");
?>
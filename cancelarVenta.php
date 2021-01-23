<?php

session_start();

unset($_SESSION["carrito"]);
$_SESSION["carrito"] = [];

header("Location: ./Punto-Venta-Admin.php?status=2");
?>
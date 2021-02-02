<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT ventas.total, ventas.fecha, ventas.vendedor, ventas.id, GROUP_CONCAT(	productos.codigo, '..',  productos.descripcion,'..',  productos.precioVenta, '..', productos_vendidos.cantidad SEPARATOR '__') AS productos FROM ventas INNER JOIN productos_vendidos ON productos_vendidos.id_venta = ventas.id INNER JOIN productos ON productos.id = productos_vendidos.id_producto GROUP BY ventas.id ORDER BY ventas.id;");
$ventas = $sentencia->fetchAll(PDO::FETCH_OBJ);

$articulos_x_pagina = 5;
$total_articulos_bd = $sentencia->rowCount();
$paginas = $total_articulos_bd / 5;
$paginas = ceil($paginas);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>MayLú - Administrador</title>

    <!-- using online links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="styles/estilos-principal.css">
    <link rel="stylesheet" href="styles/sidebar-themes.css">
    <link rel="stylesheet" href="styles/estilos-nuevoproducto.css">
    <link rel="stylesheet" href="styles/popups.css">

    <link rel="shortcut icon" type="image/png" href="img/icon.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">

</head>

<body>

    <!-- sidebar-menu  -->
    <div class="page-wrapper default-theme sidebar-bg bg1 toggled">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <nav id="sidebar" class="sidebar-wrapper">
                    <div class="sidebar-content">
                        <!-- sidebar-brand  -->
                        <div class="sidebar-item sidebar-brand">
                            <span align="center">
                                <i class="fa fa-shoe-prints"></i>
                                MayLú
                            </span>
                        </div>
                        <!-- sidebar-header  -->
                        <div class="sidebar-item sidebar-header d-flex flex-nowrap">
                            <div class="user-pic">
                                <img class="img-responsive img-rounded" src="img/user.png" alt="User picture">
                            </div>
                            <div class="user-info">
                                <span class="user-name"><strong>Carlos
                                        Loaeza</strong>
                                </span>
                                <span class="user-role">Administrador</span>
                                <span class="user-status">
                                    <i class="fa fa-circle"></i>
                                    <span>Online</span>
                                </span>
                            </div>
                        </div>
                        <!-- sidebar-menu  -->
                        <div class=" sidebar-item sidebar-menu">
                            <ul>
                                <li class="header-menu">
                                    <span>General</span>
                                </li>
                                <li>
                                    <a href="principal-admin.php">
                                        <i class="fa fa-tachometer-alt"></i>
                                        <span class="menu-text">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Punto-Venta-Admin.php">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="menu-text">Punto de Venta</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Inventario-Administrador.php?pagina=1">
                                        <i class="fa fa-warehouse"></i>
                                        <span class="menu-text">Inventario</span>
                                    </a>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fa fa-file-invoice-dollar"></i>
                                        <span class="menu-text">Reportes</span>
                                        <span class="badge badge-pill badge-warning">New</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="reportes.php?pagina=1"><i class="fa fa-list-ol"></i> Ventas
                                                </a>
                                            </li>
                                            <li>
                                                <a href="apartado2.php"><i class="fa fa-calendar-check"></i> Apartado <span class="badge badge-pill badge-warning">New</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="AdminCaja.php">
                                        <i class="fa fa-cash-register"></i>
                                        <span class="menu-text">Caja</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="apartado.php">
                                        <i class="fa fa-cart-plus"></i>
                                        <span class="menu-text">Apartados</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Usuario-Administrador.php?pagina=1">
                                        <i class="fa fa-users"></i>
                                        <span class="menu-text">Usuarios</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Proveedor-Administrador.php?pagina=1">
                                        <i class="fa fa-truck"></i>
                                        <span class="menu-text">Proveedores</span>
                                    </a>
                                </li>
                                <li class="header-menu">
                                    <span>Extra</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-question"></i>
                                        <span class="menu-text">Ayuda</span>
                                        <span class="badge badge-pill badge-primary">Prox</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-calendar"></i>
                                        <span class="menu-text">Calendario</span>
                                        <span class="badge badge-pill badge-primary">Prox</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" id="btnabrir">
                                        <i class="fa fa-power-off"></i>
                                        <span class="menu-text" onclick="cierra()">Cerrar sesión</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- sidebar-menu  -->
                    </div>
                    <div class="sidebar-footer">
                        <div class="dropdown">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-laptop-code"></i>
                                <i class="fa fa-terminal"></i>
                                <span> codiguITO</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>



            <main class="page-content pt-2">
                <div class="fondo_transparente">
                    <div class="modal">
                        <div class="modal_titulo">ADVERTENCIA</div>
                        <div class="modal_mensaje">
                            <p>¿Seguro que desea salir?</p>
                        </div>
                        <div class="modal_botones">
                            <a href="login.php" class="boton" id="btn-yes">SI</a>
                            <a href="#" class="boton" id="btn-no" onclick="NO()">NO</a>
                        </div>
                    </div>
                </div>

        </nav>

        <main class="page-content pt-2">
            <div class="pdf">
                <h1>Reporte de ventas: </h1>
                <br>

                <div class="col-xs-12">
                    <?php
                    if (!$_GET) {
                        header('Location:reportes.php?pagina=1');
                    }
                    if ($_GET['pagina'] > $paginas) {
                        header('reportes.php?pagina=1');
                    }

                    $iniciar = ($_GET['pagina'] - 1) * $articulos_x_pagina;
                    //echo $iniciar;

                    $sql_articulos = "SELECT ventas.total, ventas.fecha, ventas.vendedor, ventas.id, GROUP_CONCAT(	productos.codigo, '..',  productos.descripcion,'..',  productos.precioVenta, '..', productos_vendidos.cantidad SEPARATOR '__') AS productos FROM ventas INNER JOIN productos_vendidos ON productos_vendidos.id_venta = ventas.id INNER JOIN productos ON productos.id = productos_vendidos.id_producto GROUP BY ventas.id ORDER BY ventas.id LIMIT :inicar,:narticulos";
                    $productosS = $base_de_datos->prepare($sql_articulos);
                    $productosS->bindParam(':inicar', $iniciar, PDO::PARAM_INT);
                    $productosS->bindParam(':narticulos', $articulos_x_pagina, PDO::PARAM_INT);
                    $productosS->execute();

                    $resultado_articulos = $productosS->fetchAll();
                    ?>

                    <br>
                    <div class="table-responsive margen-tabla">
                        <table class="table table-hover" id="tablee">
                            <thead>
                                <tr>
                                    <th>Número</th>
                                    <th>Fecha - Vendedor</th>
                                    <th>Productos vendidos</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($resultado_articulos as $venta) { ?>
                                    <tr>
                                        <td><?php echo $venta->id ?></td>
                                        <td><?php echo $venta->fecha ?><br>
                                            <?php echo $venta->vendedor ?></td>
                                        <td>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Modelo</th>
                                                        <th>Descripción</th>
                                                        <th>Cantidad</th>
                                                        <th>Precio U.</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach (explode("__", $venta->productos) as $productosConcatenados) {
                                                        $producto = explode("..", $productosConcatenados)
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $producto[0] ?></td>
                                                            <td><?php echo $producto[1] ?></td>
                                                            <td><?php echo $producto[3] ?></td>
                                                            <td><?php echo $producto[2] ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td>$ <?php echo $venta->total ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>

                        </table>
                        <div class="d-flex flex-row-reverse">
                            <nav aria-label="Page navigation example">

                                <ul class="pagination ">
                                    <li class="page-item
                        <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>
                        ">

                                        <a class="page-link" href="reportes.php?pagina=<?php echo $_GET['pagina'] - 1 ?>">
                                            Anterior
                                        </a>
                                    </li>

                                    <?php for ($i = 0; $i < $paginas; $i++) : ?>

                                        <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : '' ?>">
                                            <a class="page-link" href="reportes.php?pagina=<?php echo $i + 1 ?>">
                                                <?php echo $i + 1 ?>
                                            </a>
                                        </li>
                                    <?php endfor ?>



                                    <li class="page-item
                    <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : '' ?>
                    "><a class="page-link" href="reportes.php?pagina=<?php echo $_GET['pagina'] + 1 ?>">Siguiente</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="js/administrador/principal-admin.js"></script>
</body>

</html>
<?php
include("base.php");
$datos = "SELECT * FROM apartados where saldo = '0'";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>MayLu - Administrador</title>

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
</head>

<body>

    

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
                                <li>
                                    <a href="reportes.php?pagina=1">
                                        <i class="fa fa-chart-line"></i>
                                        <span class="menu-text">Reportes</span>
                                    </a>
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
        </nav>

        
        <main class="page-content pt-2">
            <div class="pdf">
                <h1>Reporte de apartados: </h1>
                <br>
                       
                    <div class="table-responsive ">
                        <table class="table table-hover" id="tablee">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Fecha Vencimiento</th>                                    
                                    <th>Cliente</th>
                                    <th>Productos vendidos</th>
                                    <th>Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $resultado = mysqli_query($conexion, $datos);

                                while ($row = mysqli_fetch_assoc($resultado)) {
                                    $fecha_actual = new DateTime(date('Y-m-d'));
                                    $fechavencido = new datetime($row['fecha']);
                                    $dias = $fecha_actual->diff($fechavencido)->format('%r%a');
                                    if ($dias <= 0) {
                                        echo '<p class="alert alert-danger agileits" role="alert"> El apartado # ', $row['id_apartado'], ' ha vencido';
                                    } elseif ($dias <= 3) {
                                        echo '<p class="alert alert-warning agileits" role="alert"> El apartado # ', $row['id_apartado'], ' está a ' . $dias . ' días de vencer.';
                                    }
                                ?>
                                    <tr>
                                        <td><?php echo $row['id_apartado'] ?></td>
                                        <td><?php echo $row['fecha'] ?></td>                                        
                                        <td><?php echo $row['cliente'] ?></td>
                                        <td>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                    <th>Modelo</th>
                                                    <th>Número</th>
                                                    <th>Color</th>
                                                    <th>Precio</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                        <tr>
                                                        <td><?php echo $row['modelo'] ?></td>
                                        <td><?php echo $row['numero'] ?></td>
                                        <td><?php echo $row['color'] ?></td>
                                        <td>$<?php echo $row['precio'] ?>.00</td>
                                                        </tr>
                                                  
                                                </tbody>
                                            </table>
                                        </td>
                                        <td>$<?php echo $row['precio'] ?>.00</td>
      
                                    </tr>
                                <?php
                                }
                                mysqli_free_result($resultado);

                                ?>
                            </tbody>

                            </style>
                        </table>
                        <br>
                    </div>

                </article>
            </section>


        </main>

    </div>

    <script>
        $("#completar").click(function() {
            alertify.alert('Se hizo el apartado', 'Gracias!', function() {
                alertify.success('Ok');
            });
        });
    </script>
    <!-- page-wrapper -->

    <!-- using online scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="JQuery/jquery-3.3.1.min.js"></script>
    <!-- Popper.js-->
    <script src="Popper/popper.min.js"></script>
    <!-- Plugin Sweet alert -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>
    <!-- Plugins Alertify -->
    <script src="plugins/alertifyjs/js/alertify.min.js"></script>
    <script src="js/popups.js"></script>
    <script src="js/almacen/principal-almacen.js"></script>
    <script src="js/administrador/validacion.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>MayLú - Administrador</title>

    <!-- using online links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">

    <!-- using local links -->
    <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css"> -->

    <link rel="stylesheet" href="styles/estilos-principal.css">
    <link rel="stylesheet" href="styles/sidebar-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/icon.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <!-- Our Custom CSS -->
<link rel="stylesheet" href="style2.css">
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
</head>

<body>

    <div class="page-wrapper default-theme sidebar-bg bg1 toggled wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
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
                                <i class="fa fa-chart-line"></i>
                                <span class="menu-text">Reportes</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="reportes.php?pagina=1"><i class="fa fa-list"></i>Reportes de ventas/a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="apartado2.php"></i>Reportes de apartados</a>
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
                                    <a href="apartado2.php">
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
<!---------->            

            <div id="overlay" class="overlay"></div>
            <div class="container p-5">
                <div class="row">
                    <div class="form-group col-md-3 ">
                        <div class="article">
                            <a href="Inventario-Administrador.php?pagina=1">
                                <img src="img/cajitas.svg" width="200" height="150" alt="">
                                <p>Inventario</p>
                            </a>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="article">
                            <a href="Punto-Venta-Admin.php">
                                <img src="img/carrito.svg" width="200" height="150" alt="">
                                <p>Punto de Venta</p>
                            </a>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="article">
                            <a href="reportes.php?pagina=1">
                                <img src="img/document.svg" width="200" height="150" alt="">
                                <p>Reportes</p>
                            </a>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="article">
                            <a href="AdminCaja.php">
                                <img src="img/wallet.svg" width="200" height="150" alt="">
                                <p>Caja</p>
                            </a>
                        </div>
                    </div>

                    <div class="form-group col-md-3">
                        <div class="article">
                            <a href="apartado.php">
                                <img src="img/broked.svg" width="200" height="150" alt="">
                                <p>Apartado</p>
                            </a>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="article">
                            <a href="Proveedor-Administrador.php?pagina=1">
                                <img src="img/provider.svg" width="200" height="150" alt="">
                                <p>Proveedores</p>
                            </a>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="article">
                            <a href="Usuario-Administrador.php?pagina=1">
                                <img src="img/user.svg" width="200" height="150" alt="">
                                <p>Usuarios</p>
                            </a>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="article">
                            <a href="">
                                <img src="img/questions.svg" width="200" height="150" alt="">
                                <p>Ayuda <span class="badge badge-pill badge-primary"> Prox </span></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- page-wrapper -->

    <!-- using online scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
        </script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
     <!-- jQuery CDN - Slim version (=without AJAX) -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>


    <!-- using local scripts -->
    <!-- <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> -->

    <script src="js/administrador/principal-admin.js"></script>

</body>

</html>
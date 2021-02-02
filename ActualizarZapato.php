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
    <link rel="stylesheet" href="actualiza-styles.css">

    <link rel="shortcut icon" type="image/png" href="img/icon.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>

<body>

    <div class="page-wrapper default-theme sidebar-bg bg1 toggled">
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
                            <a href="Inventario-Administrador.php">
                                <i class="fa fa-warehouse"></i>
                                <span class="menu-text">Inventario</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-tachometer-alt"></i>
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
                        <!--<li>
                            <a href="devoluciones.php">
                                <i class="fa fa-sync-alt"></i>
                                <span class="menu-text">Devoluciones</span>
                            </a>
                        </li>-->
                        <li>
                            <a href="Usuario-Administrador.php">
                                <i class="fa fa-users"></i>
                                <span class="menu-text">Usuarios</span>
                            </a>
                        </li>
                        <li>
                            <a href="Proveedor-Administrador.php">
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


        <?php
        if (!isset($_GET["id"])) exit();
        $id = $_GET["id"];
        include_once "base_de_datos.php";
        $sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id = ?;");
        $sentencia->execute([$id]);
        $producto = $sentencia->fetch(PDO::FETCH_OBJ);
        if ($producto === FALSE) {
            echo "¡No existe algún producto con ese ID!";
            exit();
        }

        ?>

        <!-- contenido  -->
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
            <div id="overlay" class="overlay"></div>
            <section id="main-content">

                <article>
                    <div id="divcerrar">
                        <a href="login.php">
                            <button class="btn-tiny btn-danger">
                                Cerrar Sesion <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                </svg>
                            </button>
                        </a>
                    </div>
                    <header id="encabezado">
                        <img id="img-inventario" class="img-responsive img-rounded" src="img/inventario.png" height="150" width="150" alt="Inventario picture">
                        <br>
                        <br>
                        <h1>Inventario</h1>
                    </header>

                    <div class="actualiza">
                        <br>
                        <h3>Actualizar Zapato</h3>
                        <h4>Ingresa los datos</h4>
                        <h5><label>*</label> Campo obligatorio </h5>
                        <form method="post" action="guardarDatosEditados.php">
                            <div class="contenedor-etiquetas-actualiza">
                                <h4> ID Zapato</h4>
                                <h4><label>*</label> Modelo</h4>
                                <h4><label>*</label> Descripción</h4>
                                <h4><label>*</label> Talla</h4>
                                <h4><label>*</label> Color</h4>
                                <h4><label>*</label> Precio Compra ($)</h4>
                                <h4><label>*</label> Precio Venta ($)</h4>
                                <h4><label>*</label> Existencias</h4>
                                <h4><label>*</label> Proveedor</h4>
                            </div>
                            <div class="contenedor-inputs-actualiza">
                                <input type="text" class="form-control" name="id" readonly value="<?php echo $producto->id ?>">
                                <input value="<?php echo $producto->codigo ?>" readonly id="codigo" name="codigo" cols="30" rows="5" class="form-control">
                                <input value="<?php echo $producto->descripcion ?>" readonly id="descripcion" name="descripcion" cols="30" rows="5" class="form-control">
                                <input value="<?php echo $producto->talla ?>" class="form-control" readonly name="talla" type="text" id="talla">
                                <input value="<?php echo $producto->color ?>" class="form-control" readonly name="color" type="text" id="color">
                                <input value="<?php echo $producto->precioVenta ?>" class="form-control" name="precioVenta" required type="text" id="precioVenta" placeholder="Precio de venta">
                                <input value="<?php echo $producto->precioCompra ?>" class="form-control" name="precioCompra" required type="text" id="precioCompra" placeholder="Precio de compra">
                                <input value="<?php echo $producto->existencia ?>" class="form-control" name="existencia" required type="text" id="existencia" placeholder="Cantidad o existencia">
                                <input value="<?php echo $producto->proveedor ?>" class="form-control" readonly name="proveedor" type="text" id="proveedor" placeholder="Proveedor">
                            </div>
                            <br><br>
                            <input class="btn boton-actualiza" type="submit" value="Guardar">
                            <a class="btn boton-cancelar" href="./Inventario-Administrador.php?pagina=1.php">Cancelar</a>
                        </form>
                        <br>
                    </div>
                    <br>
                    <br>
                </article>
            </section>
        </main>
        <!-- page-content" -->
    </div>
    <!-- using online scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="js/administrador/principal-admin.js"></script>

</body>

</html>
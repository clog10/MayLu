<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM productos;");
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
    <link rel="stylesheet" href="styles/estilos-apartados.css">

    <link rel="shortcut icon" type="image/png" href="img/icon.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>

<body>

    <div id="container">
        <div class="overlay" id="overlay">
            <div class="popup" id="popup">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                <h3>Agregar Producto</h3>
                <h4>Ingresa los datos</h4>
                <h5><label>*</label> Campos obligatorios</h5>
                <form method="post" action="nuevo.php">
                    <div class="contenedor-etiquetas">
                        <h4><label>*</label> Modelo</h4>
                        <h4><label>*</label> Descripción</h4>
                        <h4><label>*</label> Talla</h4>
                        <h4><label>*</label> Color</h4>
                        <h4><label>*</label> Precio U.</h4>
                        <h4><label>*</label> Precio Venta</h4>
                        <h4><label>*</label> Existencias</h4>
                        <h4><label>*</label> Proveedor</h4>
                    </div>
                    <div class="contenedor-inputs">
                        <input type="text" name="codigo" placeholder="Modelo de zapato">
                        <select name="descripcion" class="select">
                            <option selected value="0"> Elige una opción </option>
                            <option value="Tenis">Tenis</option>
                            <option value="Zapatilla">Zapatilla</option>
                            <option value="Flats">Flats</option>
                            <option value="Bota">Bota</option>
                            <option value="Botín">Botín</option>
                            <option value="Sandalia">Sandalia</option>
                            <option value="Zapato confort">Zapato confort</option>
                        </select>
                        <select name="talla" class="select">
                            <option selected value="0"> Elige una opción </option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                        </select>
                        <input type="text" name="color" placeholder="Color">
                        <input type="text" name="precioCompra" placeholder="Precio Unitario">
                        <input type="text" name="precioVenta" placeholder="Precio Venta">
                        <input type="text" name="existencia" placeholder="Cantidad en existencias">
                        <select name="proveedor" class="select">
                            <option selected value="0"> Elige una opción </option>
                            <option value="Alma Pérez Vista">Alma Pérez Vista</option>
                            <option value="Explorar">Explorar</option>
                            <option value="Patey woman">Patey Woman</option>
                            <option value="Calzaleta">Calzaleta</option>
                        </select>
                    </div>
                    <input class="btn-submit" type="submit" value="Guardar">
                </form>
            </div>
        </div>
    </div>

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
                                    <a href="Inventario-Administrador.php">
                                        <i class="fa fa-warehouse"></i>
                                        <span class="menu-text">Inventario</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="reportes.php">
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
                                    <a href="devoluciones.php">
                                        <i class="fa fa-sync-alt"></i>
                                        <span class="menu-text">Devoluciones</span>
                                    </a>
                                </li>
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


            
            <header id="encabezado">
                <img id="img-inventario" class="img-responsive img-rounded" src="img/inventario.png" height="150" width="150" alt="Inventario picture">
                <h1>Inventario</h1>
            </header>

            <div id="container1">
                <form>
                    <div class="field" id="searchform">
                        <input type="text" id="searchterm" name="introducemodelo" placeholder="Ingresar Modelo" />
                        <input class="btn btn" type="submit" id="search" value="Buscar" />
                        <button type="button" id="btn-abrir-popup"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Agregar
                        </button>
                    </div>
                </form>
                <?php
                    if(isset($_GET['introducemodelo'])){
                        $sentencia = $base_de_datos->query("SELECT * FROM productos where codigo = '" .$_GET['introducemodelo']. "';");
                        
                    } 
                    $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
                ?>
            </div>

            <div class=" table-responsive">
                <br>
                <table class="table table-hover" id="tablee">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Imagen</th>
                            <th>Modelo</th>
                            <th>Descripción</th>
                            <th>Talla</th>
                            <th>Color</th>
                            <th>Precio venta</th>
                            <th>Precio compra</th>
                            <th>Existencia</th>
                            <th>Proveedor</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($productos as $producto) { ?>
                            <tr>
                                <td><?php echo $producto->id ?></td>
                                <td><img src="img/maylu.png" alt="logo" width="100" height="100" /></td>
                                <td><?php echo $producto->codigo ?></td>
                                <td><?php echo $producto->descripcion ?></td>
                                <td><?php echo $producto->talla ?></td>
                                <td><?php echo $producto->color ?></td>
                                <td>$<?php echo $producto->precioVenta ?></td>
                                <td>$<?php echo $producto->precioCompra ?></td>
                                <td><?php echo $producto->existencia ?></td>
                                <td><?php echo $producto->proveedor ?></td>
                                <td>
                                    <a class="btn btn-warning" href="<?php echo "ActualizarZapato.php?id=" . $producto->id ?>"><i class="fa fa-edit"></i> Editar</a>
                                    <a class="btn btn-danger" href=""><i class="fas fa-eye-slash"></i> Ocultar</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>


    <!-- using online scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="js/popups.js"></script>
    <script src="js/administrador/principal-admin.js"></script>
    <script src="js/administrador/validacion.js"></script>

</body>

</html>
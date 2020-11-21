<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>carrito de Compras</title>

    <!-- Favicon -->
    <link rel="icon" href="img/BazardelMetal.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>

    <!-- ****** Top Header Area Start ****** -->
    <div class="top_header_area">
        <div class="container">
            <div class="row">
                <div class="col-5 col-sm-6">
                    <!--  Top Social bar start -->
                    <div class="top_social_bar">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!--  Login Register Area -->
                <div class="col-7 col-sm-6">
                    <div class="signup-search-area d-flex align-items-center justify-content-end">
                        <div class="login_register_area d-flex">
                            <div class="login">
                                <a href="register.html">Ingresa</a>
                            </div>
                            <div class="register">
                                <a href="register.html">Registrate</a>
                            </div>
                        </div>
                        <!-- Search Button Area -->
                        <div class="search_button">
                            <a class="searchBtn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </div>
                        <!-- Search Form -->
                        <div class="search-hidden-form">
                            <form action="#" method="get">
                                <input type="search" name="search" id="search-anything" placeholder="Search Anything...">
                                <input type="submit" value="" class="d-none">
                                <span class="searchBtn"><i class="fa fa-times" aria-hidden="true"></i></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Top Header Area End ****** -->
    <div class="breadcumb-area" style="background-image: url(img/clasicos.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>La Tienda del Rock</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Header Area Start ****** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-12">
                    <div class="logo_area text-center" style="font-family: 'Poppins', sans-serif !important;">
                        <a href="index.html" class="yummy-logo" ></a>
                    </div>
                </div>
            </div>

    <!-- ****** Welcome Post Area Start ****** -->
    <br>
<?php

//hacer consulta para traer todos los usuarios

//1. Incluir el archivo donde esta nuestra clase BaseDatos
include("BaseDatos.php");

//2. Crear la Consulta SQL para buscar datos
$consultaSQL="SELECT * FROM compra WHERE 1";

//3.  Crear un objeto de la clase BaseDatos y usar metodo buscardatos

$transaccion=new Basedatos();
$usuarios=$transaccion->buscarDatos($consultaSQL);

?>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3">
        <?php foreach($usuarios as $usuario):?>

            <div class="col mb-4">
                <div class="card h-100">
                    <img src="<?php echo($usuario["imagen"]) ?>" class="card-img-top" alt="...">
                     <div class="card-body">
                            <h5 class="card-title"><?php echo($usuario["nombre"])?></h5>
                            <p class="card-text"><?php echo($usuario["descripcion"])?></p>
                            <a href="eliminarUsuarios.php?id_Producto=<?php echo($usuario["id_Producto"]) ?>" class="btn btn-danger">Eliminar</a>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($usuario["id_Producto"])?>">
                                Editar
                            </button>
                            <div class="modal fade" id="editar<?php echo($usuario["id_Producto"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Editor de Compra</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="EditarUsuario.php?id_Producto=<?php echo($usuario["id_Producto"]) ?>" method="POST">
                                                    <div class="form-group">
                                                        <label>Nombre del Producto</label>
                                                        <input type="text" class="form-control" name="nombreEditar" value="<?php echo($usuario["nombre"])?>">
                                                    </div>
                                                    <div class="form-group">    
                                                        <label>Precio Nuevo</label>
                                                        <input type="text" class="form-control" name="precioEditar" value="<?php echo($usuario["precio"])?>">
                                                    </div>    
                                                    <div class="form-group"> 
                                                                <label>Descripción</label> 
                                                                <textarea class="form-control" name="descripcionEditar" value="<?php echo($usuario["descripcion"])?>"></textarea> 
                                                    </div>
                                                        <button type="submit" class="btn btn-info" name="botonEditar">Editar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                </div>
            </div>
        <?php endforeach?>
    </div>
    <!-- ****** Footer Menu Area Start ****** -->
    <footer class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content">
                        <!-- Logo Area Start -->
                        <div class="footer-logo-area text-center">
                            <a href="index.html" class="yummy-logo"></a>
                        </div>
                        <!-- Menu Area Start -->
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-footer-nav" aria-controls="yummyfood-footer-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                            <!-- Menu Area Start -->
                            <div class="collapse navbar-collapse justify-content-center" id="yummyfood-footer-nav">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Novedades</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Categorias</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Archivo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Acerca de Nosotros</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contactanos</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <div class="copy_right_text text-center">
                        <p>Copyright @2018 All rights reserved</i> by <a href="img/core-img/BazardelMetal.ico" target="_blank">MetalHead</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ****** Footer Menu Area End ****** -->

    <!-- Jquery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

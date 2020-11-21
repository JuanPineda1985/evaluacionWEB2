<?php

include("BaseDatos.php");

$id=$_GET["id_Producto"];

if(isset($_POST["botonEditar"])){

    //1. RECIBIR DATOS
    $nombre=$_POST["nombreEditar"];
    $precio=$_POST["precioEditar"];
    $descripcion=$_POST["descripcionEditar"];

    //2. RECIBIR ID DE PRODUCTO


    //3. COPIAR O CREAR OBJETO DE CLASE
    $transaccion=new BaseDatos();

    //4. CREAR CONSULTA PARA EDITAR EN SQL
    $consultaSQL="UPDATE compra SET nombre='$nombre',descripcion='$descripcion',precio='$precio', WHERE id_Producto='$id'";

    //5.Acceder a metodo EditarUsuario

    $transaccion->editarDatos($consultaSQL);

    //6. redireccion

    header("location:vistaCompras.php");

}









?>
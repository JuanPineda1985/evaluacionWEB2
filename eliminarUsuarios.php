<?php

include("BaseDatos.php");

//0. recibir el id del registro a eliminar
$id=$_GET["id_Producto"];

//1.Crear o Utilizar la BaseDatos
$OperacionBD= new BaseDatos();

//2. Crear la consulta SQL para Eliminar REGISTRO
$consultaSQL="DELETE FROM compra WHERE id_Producto='$id'";

//3. Llamar y Utilizar el metodo eliminarDatos
$OperacionBD->eliminarDatos( $consultaSQL);

//4. redireccion

header("location:vistaCompras.php");


?>
 
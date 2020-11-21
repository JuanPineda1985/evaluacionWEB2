<?php

	include("BaseDatos.php");

    
    if (isset($_POST["botonEnvio"])){	
    	
    	//1. recibir datos

        $nombre=$_POST["nombre"];
        $marca=$_POST["marca"];
        $descripcion=$_POST["descripcion"];
        $precio=$_POST["precio"];
        $imagen=$_POST["imagen"];
        
        //2. Crear un objeto de la Clase BaseDatos
        //2. Sacar na copia de la Clase BaseDatos

        $transaccion= new BaseDatos();

        //3. Crear la consulta SQL para agregar datos
        $consultaSQL= "INSERT INTO compra(nombre,marca,descripcion,precio,imagen) VALUES ('$nombre','$marca','$descripcion','$precio','$imagen')";


        //4. llamar al metodo agregardatos
        $transaccion->agregardatos($consultaSQL);

        //5. redireccion

        header("location:vistaCompras.php");

    }

?>
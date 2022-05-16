<?php
                                
    require('../database.php');

    $nombre= $_POST["Nombre"];
    $apellidos= $_POST["Apellidos"];
    $email= $_POST["Email"];
    $mensaje= $_POST["Mensaje"];  

    if ($conexion=mysqli_connect($servidor, $usuario, $clave, $bbdd)) {
    //entramos por aqui...
    mysqli_query($conexion, "SET NAMES 'UTF8'" );
    //esta parte es simplemente para asegurarnos que todo lo que entre este codificado
    // 2.- Seleccionamos la base de datos
    if (mysqli_select_db($conexion, $bbdd)) {
    // 3.- Definimos la consulta

    $consulta="INSERT INTO contactos (nombre, apellidos, email, mensaje) VALUES ('$nombre', '$apellidos', '$email', '$mensaje');";
    // 4.- Ejecutar la consulta/query
    //guardar los registros en una nueva variable
    $resultado=mysqli_query($conexion, $consulta);
    //ponemos siempre conexion porque hay que indicar siempre la conexion que usamos, siempre lo pide la funcion 
    }
    mysqli_close($conexion);    
    }
    header("Location:../index.php");
?>

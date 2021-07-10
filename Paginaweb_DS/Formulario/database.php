<?php

    $conexion=mysqli_connect('localhost','root','','formulario') or die ('Error en la base de datos');

    $sql="INSERT INTO usuarios VALUES(null,'".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["cedula"]."','".$_POST["correo"]."',,'".$_POST["genero"]."','".$_POST["estadocivil"]."', '".$_POST["dia"]."','".$_POST["mes"]."','".$_POST["año"]."','".$_POST["telefono"]."','".$_POST["direccion"]."')";

    $resultado=mysqli_query($conexion,$sql) or die ('Error en el query ');

    mysqli_close($conexion);


    echo 'Nombre: '.$_POST["nombre"].'<br>';

    echo 'Apellido: '.$_POST["apellido"].'<br>';

    echo 'Correo: '.$_POST["correo"].'<br>';

    echo 'Contraseña: '.$_POST["pass"].'<br>';

    echo 'Genero: '.$_POST["genero"];

?>

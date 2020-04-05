<?php
    include 'conexion.php';
    //obtener los datos
    $usuario = $_POST['usuario'];
    $password =$_POST['password'];
    $nombre =$_POST['nombre'];
    $apellidos =$_POST['apellidos'];

    $consulta ="UPDATE usuario SET password = '$password', nombre = '$nombre', apellidos = '$apellidos' WHERE usuario = 'usuario';

    $resultado = $mysqli -> query($query);
    
    if($resultado) { 
        header("Location: index.php");
    }else {
        echo "Algo anda mal, no se actualizo";
     }

     ?>


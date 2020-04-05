<?php
    include = 'conexion.php';

    $user = $_GET ['usuario']

    $consulta = "DELETE * FROM usuarios WHERE = "user";

    $respuesta = $mysqli->$consulta($consulta);
    if($respuesta){
        echo 'Dato eliminado';
     }else{ 
         echo 'Error...';
     }
?>
     
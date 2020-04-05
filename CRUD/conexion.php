<?php

//archivo de conexion a la base de datos

$mysqli = new mysqli("localhost","root","","ico");

if(mysqli_connect_errno()){ 
    
    echo'conexion fallida, algo anda mal' ;
    exit();

    }else{
        //echo "Exito¡¡ Ya te conectaste;

    }
  

?>
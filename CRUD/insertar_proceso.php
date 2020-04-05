<?php

include 'conexion.php';
//obtenemos la informacion y la almacenamos en variables

$Nombre = $_POST['nombre'];
$Apellidos = $_POST['apellidos'];
$Usuario = $_POST['usuario'];
$Password = $_POST['password'];

//consulta en base de datos
$consulta = "INSERT INTO usuarios(usuarios, password, nombre, apellidos) values('$Usuario','$Password','$Nombre','$Apellidos')";
$resultado = $mysqli-> query ($consulta);
echo $consulta;
if($resultado>0){
    echo "Insercion exitosa";
}else{
    echo "No se pudo insertar";
}

?>
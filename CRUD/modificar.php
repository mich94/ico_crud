<?php
    include "conexion.php";
    //obtenemos el usuario
     $user = $_GET ['usuario'];
    // echo $user;
     $consulta = "SELECT * FROM usuarios WHERE usuarios='$user'";
     $resultado = $mysqli->query($consulta);
     $renglon = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="p_modificar.php" method="post">
    <table>
        <tr>
            <td>Usuario:</td>
            <td><input type="text" name="usuario" id="" value="" <?php echo $renglon ['usuarios']; ?>></td>
        </tr>
        <tr>
            <td> Password:</td>
            <td><input type="text" name="password" id="" value=""<?php echo $renglon ['password']; ?>></td>
        </tr>
        <tr>
        <td>Nombre:</td>
        <td><input type="text" name="nombre" id="" value=""<?php echo $renglon ['nombre']; ?>></td>
        </tr>
        <tr>
            <td>Apellidos:</td>
            <td><input type="text" name="apellidos" id="" value=""<?php echo $renglon ['apellidos']; ?></td>
        </tr>
        <tr>
            <tr><button type="submit">Enviar</button></tr>
        </tr>

    </table>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - PHP</title>
</head>
<body>
    <h1>Formulario - Usuarios</h1>
   <form action="insertar_proceso.php" method="post">
   <table>
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name="nombre" id=" "></td>
         </tr>
        <tr>
             <td>Apellidos:</td>
             <td><input type="text" name="apellidos" id=" "></td>
        </tr>
        <tr>
            <td>Usuarios</td>
            <td><input type="text" name="usuario" id=" "></td>

        </tr>
        <tr>
            <td>Contraseña</td>
            <td><input type="text" name="password" id=" "></td>
        </tr>
        <tr>
        <td><button type="submit">Guardar</button></td>
        </tr>
    </table>
   </form>
<center>
<?php
    include "consulta.php";
?>
</center>

</body>
</html>

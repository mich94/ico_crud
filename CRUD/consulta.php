<?php
    include "conexion.php";
    $consulta = "SELECT * FROM Usuarios";
    $resultado = $mysqli->query($consulta);
?>

<table border="1"> 
    <tr>
        <th> Usuario</th>
        <th>Password</th>
        <th>Nombre</th>
        <th>Apellido</th>
    </tr>
    
    <?php
        while($renglon = $resultado->fetch_assoc()){
        ?>
<tr>
    <td><?php echo $renglon ['usuarios']; ?> </td>
    <td><?php echo $renglon ['password']; ?></td>
    <td><?php echo $renglon['nombre']; ?></td>
    <td><?php echo $renglon['apellidos']; ?></td>
    <td><a href="modificar.php?usuario=<?php echo $renglon['usuarios']?> " >Modificar</a>  </td>
    <td> <a href="eliminar.php?usuario=<?php echo $renglon['usuarios']; ?>">Eliminar</a></td>
</tr>




    
    <?php          
        }
    ?>
</table>
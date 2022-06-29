<?php  include 'conexion.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabla.css">
    <title>Document</title>
</head>
<body>
    <a href="./index.php">Pagina Pincipal</a>
    <a href="./creacion.php">Crear Ususarios</a>
    <table>
        <tr>
            <th>identificacion</th>
            <th>Nombre</th>
            <th>Usuario</th>
            <th>clave</th>
        </tr>
    <?php
    $sel = $con -> query ("SELECT * FROM  usuarios");
    while ($fila = $sel -> fetch_assoc ()) {
        ?> 
        <tr>
            <th class="b"><?php echo $fila ['cedula']?></th>
            <th class="b"><?php echo $fila ['nombre']?></th>
            <th class="b"><?php echo $fila ['usuario']?></th>
            <th class="b"><?php echo $fila ['clave']?></th>
            <td><a href="modificacion.php?cedula=<?php echo $fila['cedula']?>">EDITAR</a></td>
            <th><a href="borrar.php?cedula=<?php echo $fila['cedula']?>">Eliminar</a></th>
        </tr>
    <?php }?>
    </table>
</body>
</html>
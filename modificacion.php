<?php 
 include 'conexion.php';
 if(isset($_REQUEST['cedula'])){
   $cedula = $_REQUEST['cedula'];
   
    $sel = $con -> query("SELECT * FROM usuarios WHERE cedula='$cedula' ");
    if ($fila = $sel -> fetch_assoc()) {
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modificacion.css">
    <title>formulario</title>
</head>
<body>
    <a href="./index.php">Pagina Pincipal</a>
    <a href="./creacion.php">Crear Ususarios</a>
    <a href="./tabla.php">Mostrar Usuarios</a>
    <br>
    <?php if(isset($_REQUEST['cedula'])){ ?>
    <form action="update.php" method="POST">
           <label >Identificacion:</label>
           <input  class='campos' type="text" name="cedula" placeholder="Identificacion" value="<?php echo $fila ['cedula'] ?>"><br>
           <label>Nombre :</label>
            <input class='campos' type="text" name="nombre" placeholder="Nombre" value="<?php  echo $fila ['nombre']?>"><br>
            <label>Usuario  :</label>
            <input class='campos' type="text" name="usuario" placeholder="Usuario" value="<?php echo $fila ['usuario']?>"><br>
            <label>Clave :</label>
            <input class='campos' type="password" name="clave" placeholder="clave" value="<?php echo $fila ['clave']?>"><br>
            <input type="submit" value="Actualizar">
    </form>
    <?php } else {
        echo "<br>No hay nada para modificar aun";
    } ?>
</body>
</html>
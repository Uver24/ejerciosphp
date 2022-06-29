<?php include 'conexion.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
<div class="form">
        <h1>Formulario 2</h1>
        <form action="guardar.php" method="POST">
           <label >Identificacion:</label>
           <input  class='campos' type="text" name="identificacion" placeholder="Identificacion" ><br>
           <label>Nombre :</label>
            <input class='campos' type="text" name="nombre" placeholder="Nombre"><br>
            <label>Usuario  :</label>
            <input class='campos' type="text" name="usuario" placeholder="Usuario"><br>
            <label>Clave :</label>
            <input class='campos' type="password" name="clave" placeholder="clave"><br>
            <input class="Boton" type="submit" value="Procesar">
        </form>
    </div>
</body>
</html>
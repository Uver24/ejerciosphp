<?php
    include 'conexion.php';
        $cedula=  $_POST['identificacion'];
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];

    $ins = $con ->query("INSERT INTO usuarios (cedula,nombre,usuario,clave) VALUES
    ('$cedula','$nombre','$usuario','$clave')")or die($con->error);
        if (isset($ins)) {
            echo "<script>
            location.href='tabla.php';
            </script>";
        }else{
            echo "no guardo";
        }
?>
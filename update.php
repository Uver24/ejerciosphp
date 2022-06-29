<?php
   include 'conexion.php';
   $cedula=  $_POST['cedula'];
   $nombre = $_POST['nombre'];
   $usuario = $_POST['usuario'];
   $clave = $_POST['clave'];

  $up =  $con -> query("UPDATE usuarios SET nombre ='$nombre', usuario='$materno',clave = '$clave'
  WHERE cedula='$cedula'");
  if ($up) {
    echo "<script>
    location.href='formulario2.php';
    </script>";
  }else{
    echo "<script>
    location.href='actualizacion.php?id=".$cedula."';
    </script>";
  }
?>
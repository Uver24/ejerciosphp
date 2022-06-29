<?php
  include 'conexion.php';
    $cedula =  $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $sel = $con -> query("SELECT * FROM usuarios WHERE cedula='$cedula' ");
    if($reg = $sel -> fetch_assoc()){
      $up =  $con -> query("UPDATE usuarios SET nombre ='$nombre', usuario='$usuario',clave = '$clave'
      WHERE cedula='$cedula'") or die ($up -> error);
      echo "<script>
      location.href='tabla.php';
      </script>";
    }else{
      echo "<script>
    alert('El registro no pudo ser modificado');
    location.href='tabla.php';
    </script>";
    }

?>
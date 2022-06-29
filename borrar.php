<?php
include 'conexion.php';

   $cedula = $_REQUEST['cedula'];

   $sel = $con -> query("SELECT * FROM usuarios WHERE cedula='$cedula' ");
   if($reg = $sel -> fetch_assoc()){
      $del = $con -> query("DELETE FROM usuarios WHERE cedula ='$cedula' ");
      echo "<script>
      location.href='tabla.php';
      </script>";
   }else{
      echo "<script>
      alert('El registro no pudo ser eliminado');
      location.href='tabla.php';
      </script>";
   }
?>
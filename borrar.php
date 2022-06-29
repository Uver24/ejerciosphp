<?php
include 'conexion.php';

 $cedula = $_REQUEST['cedula'];

 $del = $con -> query("DELETE FROM usuarios WHERE cedula ='$cedula' ");
 if ($del) {
    echo "<script>
    location.href='formulario2.php';
    </script>";
 }else{
    echo "<script>
    alert('El registro no pudo ser eliminado');
    location.href='formulario2.php';
    </script>";
 }
?>
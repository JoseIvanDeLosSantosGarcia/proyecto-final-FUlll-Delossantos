<?php

include("conexion.php");
$con=conectar();

$idempleado=$_GET['id'];

$sql="DELETE FROM empleados  WHERE idempleado='$idempleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleados.php");
    }
?>

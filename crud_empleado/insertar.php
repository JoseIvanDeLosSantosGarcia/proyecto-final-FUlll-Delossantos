<?php
include("conexion.php");
$con=conectar();

$idempleado=$_POST['idempleado'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Telefono=$_POST['Telefono'];
$Correo=$_POST['Correo'];
$Direccion=$_POST['Direccion'];
$Edad=$_POST['Edad'];


$sql="INSERT INTO empleados VALUES('$idempleado','$Nombre','$Apellido','$Telefono','$Correo','$Direccion','$Edad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleados.php");
    
}else {
}
?>
<?php

include("conexion.php");
$con=conectar();

$idcliente=$_POST['idcliente'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Telefono=$_POST['Telefono'];
$Direccion=$_POST['Direccion'];
$Correo=$_POST['Correo'];
$CodigoPostal=$_POST['CodigoPostal'];

$sql="UPDATE clientes SET  Nombre='$Nombre',Apellido='$Apellido',Telefono='$Telefono',Direccion='$Direccion',Correo='$Correo',CodigoPostal='$CodigoPostal' WHERE idcliente='$idcliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>
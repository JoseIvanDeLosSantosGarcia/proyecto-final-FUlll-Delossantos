<?php
include("conexion.php");
$con=conectar();

$idarticulo=$_POST['idarticulo'];
$Nombre=$_POST['Nombre'];
$Cantidad=$_POST['Cantidad'];
$Precio=$_POST['Precio'];
$Marca=$_POST['Marca'];
$Empresa=$_POST['Empresa'];
$TipoProducto=$_POST['TipoProducto'];


$sql="INSERT INTO articulos VALUES('$idarticulo','$Nombre','$Cantidad','$Precio','$Marca','$Empresa','$TipoProducto')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: articulo.php");
    
}else {
}
?>
<?php
include("conexion.php");
$con=conectar();

$id_producto=$_POST['id_producto'];
$Nombre_producto=$_POST['$Nombre_producto'];
$Precio_compra=$_POST['$Precio_compra'];
$Precio_venta=$_POST['$Precio_venta'];
$Stock=$_POST['$Stock'];
$Categoria=$_POST['$Categoria'];

$sql="INSERT INTO productos VALUES('$id_producto','$Nombre_producto','$Precio_compra','$Precio_venta','$Stock','$Categoria')";
$query= mysqli_query($con,$sql);

if($query){
	Header("Location: index.php");
}else{
	
}
?>
<?php
include("conexion.php");
$con=conectar();

$id_producto=$_POST['id_producto'];
$Nombre_producto=$_POST['Nombre_producto'];
$Precio_compra=$_POST['Precio_compra'];
$Precio_venta=$_POST['Precio_venta'];
$Stock=$_POST['Stock'];
$Categoria=$_POST['Categoria'];

$sql="UPDATE productos SET Nombre_producto='$Nombre_producto',Precio_compra='$Precio_compra',Precio_venta='$Precio_venta',Stock='$Stock',Categoria='$Categoria' WHERE id_producto=$id_producto";

$query=mysqli_query($con,$sql);

	if($query){
		Header("Location: index.php");
	}
?>
<?php
	include("conexion.php");
	$con=conectar();
	
	$sql="SELECT * FROM productos";
	$query=mysqli_query($con,$sql);
	
	$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Pagina Productos</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		 
				
	</head>
	<body>
		  <div class="container mt-5">
				<div class="row">
					<div class="col-md-10">
						<h1>INGRESAR DATOS</h1>
						<form action="insertar.php" method="post">
						<div class="row g-3">
  <div class="col">
  	<label for="id_producto">Id del producto:</label>
 	<input type="text" name="id_producto" id="id_producto">  
  </div>
  
  <div class="col">
  	<label for="Nombre_producto">Nombre del producto:</label>
 	<input type="text" name="Nombre_producto" id="Nombre_producto">
  </div>
  <div class="col">
    <label for="Precio_compra">Precio compra:</label>
 	<input type="text" name="Precio_compra" id="Precio_compra">
  </div>
  <div class="col">
    <label for="Precio_venta">Precio venta:</label>
 	<input type="text" name="Precio_venta" id="Precio_venta">
  </div>
  <div class="col">
    <label for="Stock">Stock en almacen:</label>
 	<input type="text" name="Stock" id="Stock">
  </div>
  <div class="col">
    <label for="Categoria">Categoria:</label>
 	<input type="text" name="Categoria" id="Categoria">
  </div>
  
  <input type="submit" class="btn btn-primary"/>
</div>
</form	
						
					</div>
					
					<div class="col-md-5">
						
						<table class="table">
							<thead class="table-success table-striped">
								<tr>
									<th>id_producto</th>
									<th>Nombre</th>
									<th>Precio_compra</th>
									<th>Precio_venta</th>
									<th>Stock</th>
									<th>Descripcion</th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
								</tr>
							
							</thead>
						
							<tbody>
									<?php 
									while($row=mysqli_fetch_array($query)){
										
									
									?>
									<tr>
									<th><?php echo $row['id_producto']?></th>
									<th><?php echo $row['Nombre_producto']?></th>
									<th><?php echo $row['Precio_compra']?></th>
									<th><?php echo $row['Precio_venta']?></th>
									<th><?php echo $row['Stock']?></th>
									<th><?php echo $row['Categoria']?></th>
									<th> <a href="actualizar.php?id=<?php echo $row['id_producto'] ?>"class="btn btn-info">Editar</a></th>
									<th> <a href="delete.php?id=<?php echo $row['id_producto'] ?>"class="btn btn-danger">Eliminar</a></th>
									
									</tr>
									<?php
										}
										?>
							</tbody>
							
						</table>
					</div>
					
					
				</div>
				
				
			</div>
	
		
	</body>
</html>
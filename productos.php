<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Productos</title>
	<link rel="stylesheet" type="text/css" href="productos.css">
</head>
<body>
	<h1 class="titulo">Registro de productos</h1>

	<table border="1" class="table">
		<tr>
			<th>Folio</th>
			<th>Nombre</th>
			<th>Marca</th>
			<th>Precio</th>	
		</tr>

		<?php 

		include 'conexion.php';
		$sql="SELECT * from productos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['folio'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['marca'] ?></td>
			<td><?php echo $mostrar['precio'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>
	<div align="center">
	<button class="boton"><a href=menu.html>Volver al menu principal</a></button>
	<button class="boton"><a href=registrar.html>Comprar productos registrados</a></button>
</div>
</body>
</html>
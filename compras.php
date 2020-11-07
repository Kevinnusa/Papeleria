<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Compras</title>
	<link rel="stylesheet" type="text/css" href="productos.css">
</head>
<body>
	<h1 class="titulo">Registro de Compras realizadas</h1>

	<table border="1" class="table">
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Folio</th>
			<th>Correo</th>
			<th>Fecha</th>	
		</tr>
		<?php 

		include 'conexion.php';
		$sql="SELECT * from registro";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['folio'] ?></td>
			<td><?php echo $mostrar['correo'] ?></td>
			<td><?php echo $mostrar['fecha'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>
	<div align="center">
	<button class="boton"><a href=menu.html>Volver al menu principal</a></button>
	<button class="boton"><a href=borrar.html>Borrar compras realizadas</a></button>
	<button class="boton"><a href=actualizar.html>Actualizar compras realizadas</a></button>
</div>
</body>
</html>
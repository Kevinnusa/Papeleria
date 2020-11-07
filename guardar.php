<?php
 include 'conexion.php';
 $nombre= $_POST["nombre"];
 $folio= $_POST["folio"];
 $correo= $_POST["correo"];
 $fecha= $_POST["fecha"];

$verificar_correo= mysqli_query($conexion, "SELECT * FROM registro where correo = '$correo'");
if (mysqli_num_rows($verificar_correo)>0){
	echo '<script>
	alert("El correo ya está registrado");
	window.history.go(-1);
	</script>';
	exit;}
	else{

		$insertar="INSERT INTO registro (nombre, folio, correo, fecha) VALUES ('$nombre','$folio','$correo','$fecha')";
 $query=mysqli_query ($conexion,$insertar);
 if(!$query){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente";
 }
 echo "<br><a href=registrar.html>Formulario de compra</a>";
 echo"<br><a href='menu.html'>Menu</a>";
 echo"<br><a href='compras.php'>Registro de compras</a>";
 
mysqli_close($conexion);
	}
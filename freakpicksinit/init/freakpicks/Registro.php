<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" href="css/estilosR.css">
</head>
<body>


	<div class="Login-box">
		<img class="avatar" src="images/Logo2.png" alt="Logo">
		<h1>Bienvenido a Freakpicks</h1>

		<form method="POST" action="">
			<!-- DATOS PERSONALES -->
			<label for="name">Nombre</label>
			<input type="text" name="nombre" placeholder="Ingrese Nombre">

			<label for="apellido">Apellido</label>
			<input type="text" name="apellido" placeholder="Ingrese apellido">

			<label for="fecha">Fecha</label>
			<input type="text" name="fecha" placeholder="Ingrese su fecha de nacimiento">

			<label for="username">Usuario</label>
			<input type="text" name="usuario" placeholder="Ingrese su nombre de usuario">

			<!-- PASSWORD -->
			<label for="password">Contrase&ntilde;a</label>
			<input type="password" name="contra" placeholder="Ingrese su contrase&ntilde;a">

			<input type="submit" name="submit"value="Registrar"</a>


			<a href="Login.html">Ya estas registrado? ingresa!</a>

		</form>
<?php
include("php/registro3.php");
?>




	</div>




</body>
</html>
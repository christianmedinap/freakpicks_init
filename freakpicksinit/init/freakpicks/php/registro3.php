<?php

include("connect_db.php");

if (isset($_POST['submit']))
{
	if(strlen($_POST['nombre']) >= 1 &&
	strlen($_POST['apellido']) >= 1 &&
	strlen($_POST['fecha']) >= 1 &&
	strlen($_POST['usuario']) >= 1 &&
	strlen($_POST['contra']) >= 1)
	{
		$nombre = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
		$fecha = trim($_POST['fecha']);
		$usuario = trim($_POST['usuario']);
		$contra = trim($_POST['contra']);
		$consulta = "INSERT INTO login(nombre, apellido, fecha, usuario, contra) VALUES ('$nombre','$apellido','$fecha','$usuario','$contra')";
		$resultado = mysqli_query($conex,$consulta);
		if($resultado){
			header("Location:MensajeR.html");
		} else{
			?> <h3 class="bad">error</h3> <?php

		}
	}else{
		?> <h3 class="bad">Por favor rellene todos los campos</h3> <?php
	}
}

?>
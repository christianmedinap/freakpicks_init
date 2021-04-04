<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login";


$conn = mysqli_connect("localhost","root","","login");
if(!$conn)
{
	die("No hay conexion: ".mysqli_connect_error());
}

$nombre = $_POST["usuario"];
$contra = $_POST["contra"];

$query = mysqli_query($conn, "SELECT * FROM login WHERE usuario = '".$nombre. "' and contra = '".$contra. "'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header("Location:../index.html");
}
else if ("nr == 0")
{
	echo "<script> alert('El usuario no existe o los datos son erroneos'); window.location='../Login.html'</script>";
}
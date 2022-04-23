<?php

include("conexion.php"); 
$con=conexion();

$nombre = $_POST["Nombre"]; 
$apaterno = $_POST["Apaterno"];
$amaterno = $_POST["Amaterno"];
$division = $_POST["Division"];
$email = $_POST["Email"];
$pass = $_POST["Pass"];
$cpass = $_POST["Cpass"];



if(isset($_POST["btnregistrar"]))
{
	$sql = "INSERT INTO usuarios(Nombre,Apaterno,Amaterno,Division,Email,Pass,Cpass) values ('$nombre','$apaterno','$amaterno','$division','$email','$pass','$cpass')";
	
	$query=mysqli_query($con,$sql);
     if($query){
		echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='index.html' </script>";
	}else {
		header('refresh:0;url=index.php?error');
	}
	}



?>


<?php
 function conexion(){
 $host="localhost";
 $user="root";
 $pass="";
 $bd="servgio";

 

$conexion=mysqli_connect($host,$user,$pass);

 mysqli_select_db($conexion,$bd);

return $conexion;

 }


 
?>
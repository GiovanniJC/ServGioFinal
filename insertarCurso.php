<?php include_once 'conexion.php';
$con=conexion();
#captura datos
$nombre=$_POST['nombre'];
$Apaterno=$_POST['Apaterno'];
$Amaterno=$_POST['Amaterno'];
$curso=$_POST['curso'];
$fechaI=$_POST['fechaI'];
$fechaF=$_POST['fechaF'];
$division=$_POST['division'];


if(isset($_POST["btnregistrar2"])){
   
     

     #consulta INSERTA EN LA TABLA IMPRIMIR
     
     $sql=("INSERT INTO registros(nombre,Apaterno,Amaterno,curso,fechaI,fechaF,division) 
     
     VALUES ('$nombre','$Apaterno','$Amaterno','$curso','$fechaI','$fechaF','$division');");
     
     $query=mysqli_query($con,$sql);

     if($query){
         header('Location: registrosCurso.php');
     }else{
         header('refresh:0;url=index.php?error');
     }

 }


?>


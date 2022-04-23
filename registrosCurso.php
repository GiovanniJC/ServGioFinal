<?php
include("conexion.php");
$conexion = conexion();

$sql = "SELECT * FROM registros";
$query1 = mysqli_query($conexion, $sql);
$row1 = mysqli_fetch_array($query1);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">

  <title>CURSOS</title>
</head>

<body>

  <div class="contenedor-form">
    <div class="toggle">
      <span>REGISTROS</span>
    </div>


    <div class="formulario">
    <h2>REGISTRAR CURSO</h2>


      

      <form action="insertarCurso.php" method="POST" class="row g-3" id="formlg">
        


        <div class="col-12">


<label for="text" class="form-label">Nombre</label>

<input type="text" pattern="[A-Za-z0-9_-@]{1,15}" class="form-control mb-3" name="nombre">

</div>


<div class="col-md-6">


<label for="text" class="form-label">Apellido Paterno</label>

<input type="text" pattern="[A-Za-z0-9_-@]{1,15}" class="form-control mb-3" name="Apaterno">

</div>


<div class="col-md-6">
<label for="text" class="form-label">Apellido Materno</label>

<input type="text" pattern="[A-Za-z0-9_-@]{1,15}" class="form-control mb-3" name="Amaterno">
</div>


<div class="col-12">
<label for="text" class="form-label">Nombre del Curso</label>

<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="curso" id="curso">

<option value="python">PYTHON</option>
<option value="php">PHP</option>
<option value="bootstrap">BOOTSTRAP</option>
<option value="javascrip">JAVASCRIP</option>
<option value="c++">C++</option>

</select>

  
</div>

<div class="col-md-6">


<label for="text" class="form-label">Fecha Inicio</label>
      <input type="date" value="2022-03-30" min="2022-01-01" max="2022-12-31"  class="form-control mb-3" name="fechaI">

</div>


<div class="col-md-6">
<label for="text" class="form-label">Feccha Final</label>
      <input type="date" value="2022-03-30" min="2022-01-01" max="2022-12-31"   class="form-control mb-3" name="fechaF">
</div>





<div class="col-md-4">


  <label for="text" class="form-label">Divisiones</label></br>
  
  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="division" id="division">

<option value="dsm">DSM</option>
<option value="redes">REDES</option>
<option value="diseñografico">DISEÑOGRAFICO</option>
<option value="informatica">INFORMATICA</option>
<option value="iot">IOT</option>

</select>
  
 

</div>




<div class="d-grid gap-2">
<INPUT type="submit" class="btn btn-warning" value=" GUARDAR" name="btnregistrar2" >

</div>

      </form>
    </div>


    <div class="formulario">




      <div class="row">

        <div class="col-md-10  text-center">
          <table class="table table-success table-striped">
            <thead class="table-primary table-striped">
              <h2>REGISTRADOS</h2>
              <tr class="table-info">
                <th>NOMBRE</th>
                <th>A.PATERNO</th>
                <th>A.MATERNO</th>
                <th>CURSO</th>
                <th> FECHA.I </th>
                <th> FECHA.F  </th>
                <th>DIVISION</th>

                <th></th>

              </tr>

            </thead>

            <tbody>
              <?php
              while ($row1 = mysqli_fetch_array($query1)) {
              ?>
                <tr>
                  <th><?php echo $row1['nombre'] ?></th>
                  <th><?php echo $row1['Apaterno'] ?></th>
                  <th><?php echo $row1['Amaterno'] ?></th>
                  <th><?php echo $row1['curso'] ?></th>
                  <th><?php echo $row1['fechaI'] ?></th>
                  <th><?php echo $row1['fechaF'] ?></th>
                  <th><?php echo $row1['division'] ?></th>


                  <th><a href="pdf.php?id=<?php echo $row1['id'] ?>" class="btn btn-primary">Imprimir</a></th>
                </tr>
              <?php
              }
              ?>


            </tbody>

          </table>



        </div>


      </div>


      <form action="pdf2.php">
        <input type="submit" value="IMPRIMIR TODOS LOS REGISTROS" name="btnregistrar3">
      </form>

    </div>



  </div>

  



  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/main.js"></script>

</body>




</html>
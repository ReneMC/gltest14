<?php
  include 'conexion.php';

  $nombre=$_POST['nombre'];
  $edad=$_POST['edad'];
  $direccion=$_POST['direccion'];
  $estado=$_POST['estado'];
  $fecha_nacimiento=$_POST['fecha_nacimiento'];
  $telefono=$_POST['telefono'];

  $porcentaje=$_POST['porcentaje'];
  $curso=$_POST['curso'];

  $lenguaje=$_POST['lenguaje'];


  mysql_query('INSERT INTO tbl_empleado (nombre,edad,direccion,estado,fecha_nacimiento,telefono)
  VALUES (\''.$nombre.'\',\''.$edad.'\',\''.$direccion.'\',\''.$estado.'\',\''.$fecha_nacimiento.'\',\''.$telefono.'\')');

  mysql_query('INSERT INTO tbl_conocimientos (porcentaje,curso)
  VALUES (\''.$porcentaje.'\',\''.$curso.'\')');

  mysql_query('INSERT INTO tbl_lenguajes (lenguaje)
  VALUES (\''.$lenguaje.'\')');


  $ver = mysql_query('SELECT id FROM tbl_empleado');
  while($row = mysql_fetch_assoc($ver)) {
    $id = $row['tbl_empleado_id'];
  }


  session_start();
  $_SESSION['user_id'] = $id;


  echo "Guardando formulario en la base de datos.";
  echo "<br>";
  echo "Por favor espere...";
?>


<script LANGUAGE="JavaScript">
  var pagina="menu"
    function redireccionar()
    {
      location.href=pagina
    }
  setTimeout ("redireccionar()", 500);
</script>

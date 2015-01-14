<?php
  include 'conexion.php';
  $clave=$_POST['clave'];

  $nombre=$_POST['nombre'];
  $edad=$_POST['edad'];
  $direccion=$_POST['direccion'];
  $estado=$_POST['estado'];
  $fecha_nacimiento=$_POST['fecha_nacimiento'];
  $telefono=$_POST['telefono'];

  $porcentaje=$_POST['porcentaje'];
  $curso=$_POST['curso'];

  $lenguaje=$_POST['lenguaje'];

  $SQL = "select * from tbl_empleado where id= ".$clave;
  $SQL = "UPDATE tbl_empleado
    SET id='$clave',
        nombre='$nombre',
        edad='$edad',
        direccion='$direccion',
        estado='$estado',
        fecha_nacimiento='$fecha_nacimiento',
        telefono='$telefono.'
  WHERE tbl_empleado.id='$clave' ";
  $registros = mysql_query($SQL, $conexion);
    if(!$registros){
      echo "Error al cambiar los datos";
    }
    else{
      echo "Guardando datos de empleado.";
      echo "<br>";
    }

  $SQL = "select * from tbl_conocimientos where id= ".$clave;
  $SQL="UPDATE tbl_conocimientos
    SET id='$clave',
        porcentaje='$porcentaje',
        curso='$curso'
  WHERE tbl_conocimientos.id='$clave' ";
  $registros = mysql_query($SQL, $conexion);
    if(!$registros){
      echo "Error al cambiar los datos";
      echo "<br>";
    }
    else{
      echo "Guardando tabla de conocimientos.";
      echo "<br>";
    }

  $SQL = "select * from tbl_lenguajes where id= ".$clave;
  $SQL="UPDATE tbl_lenguajes
    SET id='$clave',
        lenguaje='$lenguaje'
  WHERE tbl_lenguajes.id='$clave' ";
  $registros = mysql_query($SQL, $conexion);
    if(!$registros){
      echo "Error al cambiar los datos";
      echo "<br>";
      echo "Redireccionando a la secci&oacute;n de cambios...";
    }
    else{
      echo "Guardando tabla de lenguajes.";
      echo "<br>";
      echo "Por favor espere...";
    }

?>

<script LANGUAGE="JavaScript">
  var pagina="cambio"
    function redireccionar()
    {
      location.href=pagina
    }
  setTimeout ("redireccionar()", 10000);
</script>

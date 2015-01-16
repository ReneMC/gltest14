<?php
  include ("conexion.php");

  $clave=$_POST[clave];

  $SQL="delete from tbl_empleado where id='$clave'";
  $registros = mysql_query($SQL, $conexion);
    if(!$registros)
    {
      echo "Error al eliminar datos de empleado";
      exit();
    }

  $SQL="delete from tbl_conocimientos where id='$clave'";
  $registros = mysql_query($SQL, $conexion);
    if(!$registros)
    {
      echo "Error al eliminar datos de tabla conocimientos";
      exit();
    }

  $SQL="delete from tbl_lenguajes where id='$clave'";
  $registros = mysql_query($SQL, $conexion);
    if(!$registros)
    {
      echo "Error al eliminar datos de tabla lenguajes";
      exit();
    }
?>

<script LANGUAGE="JavaScript">
  var pagina="baja"
    function redireccionar()
    {
      location.href=pagina
    }
  setTimeout ("redireccionar()", 500);
</script>

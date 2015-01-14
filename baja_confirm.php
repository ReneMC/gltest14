<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>gltest14</title>
    <link rel="stylesheet" href="resources/css/style.css" />
    <link rel="stylesheet" href="resources/css/style.min.css" />
    <link rel="stylesheet" href="resources/css/style.css.map" />
    <link rel="stylesheet" href="resources/css/style-theme.css" />
    <link rel="stylesheet" href="resources/css/style-theme.min.css" />
    <link rel="stylesheet" href="resources/css/style-theme.min.map" />
  </head>
  <body>
<!--============================================================================-->
<!--============================ Barra de Navegación ===========================-->
<!--============================================================================-->
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="https://plus.google.com/u/0/+ReneMejia8/">Ren&eacute; Enrique Mej&iacute;a</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a><span class="glyphicon glyphicon-home" aria-hidden="true"></span> </a></li>
        <li><a><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> </a></li>
        <li class="active"><a><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Baja empleados</a></li>
        <li><a><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> </a></li>
      </ul>
    </div>
  </div>
</nav>
<!--============================================================================-->
<!--============================== Head del Sitio ==============================-->
<!--============================================================================-->
<div><!-- div principal -->

  <div class="col-md-10">
    <img alt="" src="resources/img/glogo.png" style="line-height: 20.799999237060px; float: left; width: 200px; height: 144px;" />
    <h3>Formulario con ABC</h3>
    <h4>Evaluaci&oacute;n para vacante de programador PHP</h4>
  </div>
<!--============================================================================-->
<!--================================= Contenido ================================-->
<!--============================================================================-->
<div>
  <div class="col-md-10-offset-3 container" style="position: middle;">
    <center><h3>Instrucciones:</h3></center>
    <p>A continuaci&oacute;n se le presentar&aacute; el formulario de confirmaci&oacute;n de baja de empleados. Favor de verificar los datos del empleado para confirmar si es este el registro que desea eliminar. Si no es el registro que busca, puede regresar al men&uacute; anterior.</p>
  </div>
</div>

<div class="col-md-10-offset-3 container" style="position: middle;">
<!--============================================================================-->
<!--================================= Formulario ===============================-->
<!--============================================================================-->

<script language="JavaScript" type="text/javascript">
function cancelar()
{
    window.location="baja"
}
</script>

</head>


<?php
include("conexion.php");
$clave=$_POST['clave'];
if(empty($clave))
{
 echo"<script language='JavaScript' type='text/JavaScript'>
           window.location='baja'
        </script>
       ";
	   exit();
}

$sql="select * from tbl_empleado where id='$clave'";
$registro=mysql_query($sql,$conexion);
if(!$registro)
{
 echo"<script language='JavaScript' type='text/JavaScript'>
           alert('Clave ID incorrecta')
		   window.location='baja'
		 </script>
       ";
}
 else
 {
 $datos=mysql_fetch_object($registro);
  if(!$datos->id)
  {
   echo"<script language='JavaScript' type='text/JavaScript'>
           alert('No existe empleado con ese ID')
		   window.location='baja'
		 </script>
       ";
	   exit();
  }
 }
?>

<form name="baja" action="baja_save" method="POST">
  <input type="hidden" name="clave" value="<?php echo $datos->id?>">
<fieldset>
    <legend>Datos Generales</legend>
    <table class="table table-striped">
      <thead>
        <tr>
          <th width="25%"></th>
          <th width="25%"></th>
          <th width="25%"></th>
          <th width="25%"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><center>Nombre:</center></td>
          <td><input type="text" class="form-control" name="nombre" value="<?php echo $datos->nombre?>" readonly></td>
          <td> <center>Edad:</center> </td>
          <td><input type="number" class="form-control" name="edad" value="<?php echo $datos->edad?>" readonly></td>
        </tr>
        <tr>
          <td><center>Direcci&oacute;n:</center></td>
          <td><input type="text" class="form-control" name="direccion" value="<?php echo $datos->direccion?>" readonly></td>
          <td><center>Estado:</center></td>
          <td><input type="text" class="form-control" name="estado" value="<?php echo $datos->estado?>" readonly></td>
        <tr>
          <td><center>Fecha de Nacimiento:</center></td>
          <td><input type="date" class="form-control" name="fecha_nacimiento" value="<?php echo $datos->fecha_nacimiento?>" readonly></input></td>
          <td><center>Tel&eacute;fono:</center></td>
          <td><input type="number" class="form-control" name="telefono" value="<?php echo $datos->telefono?>" readonly></input></td>
        </tr>
      </tbody>
    </table>
</fieldset>


<input type="submit" class="btn btn-default btn-lg" value="S&iacute;, deseo eliminar este registro">
<input type="button" class="btn btn-default btn-lg" onClick="window.location='menu'" value="Volver al men&uacute;" name="regresar">
</div>


</form>

<!-- Se hacen saltos de línea en caso de que el footer -->
<!-- se coma parte del espacio del contenido. -->
<br><br><br><br><br><br><br>
<!--============================================================================-->
<!--================================= Footer ===================================-->
<!--============================================================================-->
  </div> <!-- div principal -->

<footer>
  <div class="container">
    <p>@_remc 2015 <a href=""> copyright</a></p>
  </div>
</footer>

<script src="resources/js/style.js"></script>
<script src="resources/js/style.min.js"></script>
<script src="resources/js/npm.js"></script>
<script>
  $('.dropdown-toggle').dropdown()
</script>
</body>
</html>

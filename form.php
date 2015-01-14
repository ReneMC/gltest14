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
        <li class="active"><a><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Insertar</a></li>
        <li><a><span class="glyphicon glyphicon-file" aria-hidden="true"></span> </a></li>
        <li><a><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> </a></li>
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
    <p>A continuaci&oacute;n se le presentar&aacute; el formulario de alta de empleados. Favor de llenar los datos que se le piden correctamente. Al terminar, seleccione el bot&oacute;n <span class="label label-default">Finalizar</span> que se encuentra al final del formulario para guardar los datos ingresados.</p>
  </div>
</div>

<div class="col-md-10-offset-3 container" style="position: middle;">

  <form name="formulario" action="form_save" method="POST">
<!--============================================================================-->
<!--================================= Formulario ===============================-->
<!--============================================================================-->
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
          <td><input type="text" class="form-control" name="nombre" placeholder="Nombre Completo" required></td>
          <td> <center>Edad:</center> </td>
          <td><input type="number" class="form-control" name="edad" min="1" max="120" step="1" placeholder="18" required></td>
        </tr>
        <tr>
          <td><center>Direcci&oacute;n:</center></td>
          <td><input type="text" class="form-control" name="direccion" placeholder="Direcci&oacute;n" required></td>
          <td><center>Estado:</center></td>
          <td><select name="estado" class="form-control" required>
                <option value="True">Activo</option>
                <option value="False">Inactivo</option>
              </select>
	        </td>
        <tr>
          <td><center>Fecha de Nacimiento:</center></td>
          <td><input type="date" class="form-control" name="fdn" required></input></td>
          <td><center>Tel&eacute;fono:</center></td>
          <td><input type="tel" class="form-control" name="telefono" placeholder="N&uacute;mero de tel&eacute;fono"></input></td>
        </tr>
      </tbody>
    </table>
</fieldset>

<fieldset>
  <legend>Conocimientos</legend>
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
          <td><center>Porcentaje:</center></td>
          <td>
            <div class="input-group">
              <input type="number" class="form-control" name="porcentaje" min="1" max="100" step="1" placeholder="0" required>
              <span class="input-group-addon" id="basic-addon2">%</span>
            </div>
          </td>
          <td> <center>Curso:</center> </td>
          <td><input type="text" class="form-control" name="curso" placeholder="Curso" required></td>
        </tr>
      </tbody>
    </table>
</fieldset>

<fieldset>
  <legend>Lenguajes</legend>
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
          <td><center>Lenguaje:</center></td>
          <td>
            <input type="text" class="form-control" name="lenguaje" placeholder="A&ntilde;adir un lenguaje" required>
          </td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>

</fieldset>

<input type="submit" class="btn btn-default btn-lg" value="Finalizar">
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

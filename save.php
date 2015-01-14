<?php

  include 'conexion.php';
  $nombre_empresa=$_POST['nombre_empresa'];
  $mail=$_POST['mail'];
  $actPrincipal=$_POST['actPrincipal'];
  $subsector=$_POST['subsector'];
  $nvlVentas=$_POST['nvlVentas'];
  $razonSocial=$_POST['razonSocial'];
  $origenCapital=$_POST['origenCapital'];
  $numEmpleados=$_POST['numEmpleados'];
  $tamano=$_POST['tamano'];
  $fechaCreacion=$_POST['fechaCreacion'];
  $puestoEncuestado=$_POST['puestoEncuestado'];
  $sexo=$_POST['sexo'];


  mysql_query('INSERT INTO usuarios (nombre_empresa, mail, actPrincipal, subsector, nvlVentas,
  razonSocial, origenCapital, numEmpleados, tamano, fechaCreacion, puestoEncuestado, sexo)
  VALUES (\''.$nombre_empresa.'\', \''.$mail.'\', \''.$actPrincipal.'\', \''.$subsector.'\',
  \''.$nvlVentas.'\', \''.$razonSocial.'\', \''.$origenCapital.'\', \''.$numEmpleados.'\',
  \''.$tamano.'\',\''.$fechaCreacion.'\',\''.$puestoEncuestado.'\', \''.$sexo.'\')');

  $ver = mysql_query('SELECT id_empresa FROM usuarios');
  while($row = mysql_fetch_assoc($ver)) {
		$id = $row['id_empresa'];
	}

  session_start();
  $_SESSION['user_id'] = $id;
  header("location:form1.php");
?>

<?php

 if (isset($_POST['dni'])) {

 	include_once('../admin/clases/conexion.php');

 	   $usuario = $_POST['dni'];

 	   $consulta = $pdo->prepare("SELECT * FROM persona WHERE dni_persona =:dni");

 	   $consulta->bindParam(':dni', $usuario);
 	   $consulta->execute();

 	      if ($consulta->rowCount()>=1) {

 	      	session_start();

 	      	$fila = $consulta->fetch();
              $_SESSION['dni_persona']       = $fila['dni_persona'];
 	      	  $_SESSION['nombres_persona']   = $fila['nombres_persona'];
 	      	  $_SESSION['email_persona']     = $fila['email_persona'];
 	      	  $_SESSION['apellidos_persona'] = $fila['apellidos_persona'];

 	      	  header('location:ficha.php');

 	      } else {

 	      	echo "Los Datos no son correctos";
 	      	header('location:../acceso_egresado.php');
 	      }


 } else {
 	# code...
 }



 ?>

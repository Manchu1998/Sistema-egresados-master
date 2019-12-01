<?php

  include_once('../clases/conexion.php');

  $id= $_GET['modalidad_id'];

  $consulta =$pdo->prepare("DELETE FROM modalidad WHERE modalidad_id=:modalidad_id");
  $consulta->bindParam(":modalidad_id", $id);

  if ($consulta->execute()) {
  	 echo "Datos eliminados existosamente";
  	 header("location:../modalidad.php");
  } else {
  	  echo "<script>alert('Estos datos estan siendo ocupados');
  	  </script>";
  	   header("location:../modalidad.php");
  }



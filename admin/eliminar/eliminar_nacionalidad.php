<?php

  include_once('../clases/conexion.php');

  $id= $_GET['pais_id'];

  $consulta =$pdo->prepare("DELETE FROM pais WHERE pais_id=:pais_id");
  $consulta->bindParam(":pais_id", $id);

  if ($consulta->execute()) {
  	 echo "Datos eliminados existosamente";
  	 header("location:../nacionalidad.php");
  } else {
  	  echo "Error al borrar";
      header("location:../nacionalidad.php");
  }



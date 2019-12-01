<?php

  include_once('../clases/conexion.php');

  $id= $_GET['persona_id'];

  $consulta =$pdo->prepare("DELETE FROM persona WHERE persona_id=:persona_id");
  $consulta->bindParam(":persona_id", $id);

  if ($consulta -> execute()) {
  	 echo "Datos eliminados existosamente";
  	 header("location:../egresado.php");
  } else {
  	  echo "Error al borrar";
      header("location:../egresado.php");
  }



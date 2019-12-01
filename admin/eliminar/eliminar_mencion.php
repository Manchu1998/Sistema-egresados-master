<?php

  include_once('../clases/conexion.php');

  $id= $_GET['mencion_id'];

  $consulta =$pdo->prepare("DELETE FROM mencion WHERE mencion_id=:mencion_id");
  $consulta->bindParam(":mencion_id", $id);

  if ($consulta -> execute()) {
  	 echo "Datos eliminados existosamente";
  	 header("location:../mencion.php");
  } else {
  	  echo "";
      header("location:../mencion.php");
  }



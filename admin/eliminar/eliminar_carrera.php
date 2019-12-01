<?php

  include_once('../clases/conexion.php');

  $id= $_GET['carrera_id'];

  $consulta =$pdo->prepare("DELETE FROM carrera WHERE carrera_id=:carrera_id");
  $consulta->bindParam(":carrera_id", $id);

  if ($consulta -> execute()) {
  	 echo "Datos eliminados existosamente";
  	 header("location:../carrera.php");
  } else {
  	  echo "";
      header("location:../carrera.php");
  }



<?php 
  
  include_once('../clases/conexion.php');

  $id= $_GET['horario_id'];

  $consulta =$pdo->prepare("DELETE FROM horario_clases WHERE horario_id=:horario_id");
  $consulta->bindParam(":horario_id", $id);

  if ($consulta -> execute()) {
  	 echo "Datos eliminados existosamente";
  	 header("location:../horario.php");
  } else {
  	  header('location:../horario.php');
  }
  


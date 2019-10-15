<?php 

 if (isset($_POST['usuario']) && isset($_POST['password'])) {
 	include_once('../admin/clases/conexion.php'); 	   

 	   $usuario = $_POST['usuario'];
 	   $password = $_POST['password'];	

 	   $consulta = $pdo->prepare("SELECT * FROM usuario WHERE nombre = :usuario AND clave = :password");

 	   $consulta->bindParam(':usuario', $usuario); 	 
 	   $consulta->bindParam(':password', $password);

 	   $consulta->execute();

 	      if ($consulta->rowCount()>=1) {
 	      	session_start();

 	      	$fila = $consulta->fetch();              
              $_SESSION['nombre'] = $fila['nombre'];
 	      	  $_SESSION['clave'] = $fila['clave'];

 	      	  

 	      	  header('location:../admin/inicio.php');

 	      } else {

 	      	echo "Los Datos no son correctos";
 	      	header('location:');
 	      }
 	      
 } else {
 	echo "Este usuario no existe";
 }
 


 ?>

<?php 

 if (isset($_POST['txt_descrihora']) && isset($_POST['txt_estahora'])) {   	

         include_once('conexion.php');     
   	      
   	      $nombre_horario   = $_POST['txt_descrihora'];
   	      $estado_horario   = $_POST['txt_estahora'];
   	      

   	      $insertar=$pdo->prepare("INSERT INTO horario_clases(horario, estado) VALUES(?,?)");

   	          $insertar->bindParam(1, $nombre_horario);
   	          $insertar->bindParam(2, $estado_horario);  	        
   	         

   	          if ($insertar->execute()) {
   	          	    echo "Datos almacenados correctamente";
   	          } else {
   	          	 echo "Error al guardar los datos";
   	           }

   	          $insertar->execute();
   	          header('location:../horario.php');
   	          

   } else {
   	 echo "Falta algunos datos por llenar";
   	   header('location:index.php');
   }










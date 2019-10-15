<?php 

 if (isset($_POST['txt_descrimod']) && isset($_POST['txt_estamod'])) {   	

         include_once('conexion.php');     
   	      
   	      $nombre_modalidad   = $_POST['txt_descrimod'];
   	      $estado_modalidad   = $_POST['txt_estamod'];          
   	      

   	      $insertar=$pdo->prepare("INSERT INTO modalidad(modalidad_name, modalidad_estado) VALUES(?,?)");

   	          $insertar->bindParam(1, $nombre_modalidad);
   	          $insertar->bindParam(2, $estado_modalidad);                	        
   	         

   	          if ($insertar->execute()) {
   	          	    echo "Datos almacenados correctamente";
   	          } else {
   	          	 echo "Error al guardar los datos";
   	           }

   	          $insertar->execute();
   	          header('location:../modalidad.php');
   	          

   } else {
   	 echo "Falta algunos datos por llenar";
   	   header('location:index.php');
   }








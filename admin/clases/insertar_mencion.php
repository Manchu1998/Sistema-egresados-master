<?php 

 if (isset($_POST['txt_descrimen']) && isset($_POST['txt_estado'])) {   	

         include_once('conexion.php');     
   	      
   	      $nombre_mencion     = $_POST['txt_descrimen'];
   	      $nombre_modalidad   = $_POST['txt_estado'];
          
   	      

   	      $insertar=$pdo->prepare("INSERT INTO mencion(mencion_mencion, estado) VALUES(?,?)");

   	          $insertar->bindParam(1, $nombre_mencion);   	        
                $insertar->bindParam(2, $nombre_modalidad);  	        
   	         

   	          if ($insertar->execute()) {
   	          	    echo "Datos almacenados correctamente";
   	          } else {
   	          	 echo "Error al guardar los datos";
   	           }

   	          $insertar->execute();
   	          header('location:../mencion.php');
   	          

   } else {
   	 echo "Falta algunos datos por llenar";
   	   header('location:index.php');
   }








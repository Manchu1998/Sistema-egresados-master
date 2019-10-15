<?php 

 if (isset($_POST['txt_descripais'])) {      

         include_once('conexion.php');     
            
            $descripcion_pais = $_POST['txt_descripais'];
           
            

            $insertar= $pdo->prepare("INSERT INTO pais(pais_nombre) VALUES(?)");

                $insertar->bindParam(1, $descripcion_pais);
               
               

                if ($insertar->execute()) {
                      echo "Datos almacenados correctamente";
                } else {
                   echo "Error al guardar los datos";
                 }

                $insertar->execute();
                header('location:../nacionalidad.php');
                

   } else {
       echo "Falta algunos datos por llenar";
         header('location:');
   }



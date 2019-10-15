<?php 

 if (isset($_POST['txt_descricar']) && isset($_POST['txt_estacar'])) {      

         include_once('conexion.php');     
            
            $descripcion_carrera = $_POST['txt_descricar'];
            $estado_carrera    = $_POST['txt_estacar'];           
            

            $insertar= $pdo->prepare("INSERT INTO carrera(carrera_name, carrera_estado) VALUES(?,?)");

                $insertar->bindParam(1, $descripcion_carrera);
                $insertar->bindParam(2, $estado_carrera);                       
               

                if ($insertar->execute()) {
                      echo "Datos almacenados correctamente";
                } else {
                   echo "Error al guardar los datos";
                 }

                $insertar->execute();
                header('location:../carrera.php');
                

   } else {
       echo "Falta algunos datos por llenar";
         header('location:');
   }










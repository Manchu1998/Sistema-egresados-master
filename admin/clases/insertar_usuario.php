<?php 

 if (isset($_POST['user']) && isset($_POST['password'])) {      

         include_once('conexion.php');     
            
            $usuario = $_POST['user'];
            $password    = $_POST['password'];
          
            

            $insertar= $pdo->prepare("INSERT INTO usuario(nombre, clave) VALUES(?,?)");

                $insertar->bindParam(1, $usuario);
                $insertar->bindParam(2, $password);                     
               

                if ($insertar->execute()) {
                      echo "Datos almacenados correctamente";
                } else {
                   echo "Error al guardar los datos";
                 }

                $insertar->execute();
                header('location:../inicio.php');
                

   } else {
       echo "Falta algunos datos por llenar";
         header('location:');
   }










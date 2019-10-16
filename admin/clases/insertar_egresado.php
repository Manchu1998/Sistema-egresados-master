<?php

//Compobando si los datos vienen cargados desde el formulario.
 if (isset($_POST['txt_dniper']) && isset($_POST['txt_nombreper']) && isset($_POST['txt_apellidoper']) && isset($_POST['txt_emailper']) && isset($_POST['txt_passwordper']) && isset($_POST['carrera'])&& isset($_POST['mencion']) && isset($_POST['modalidad']) && isset($_POST['jornada']) && isset($_POST['nacionalidad'])) {


         include_once('conexion.php');

   	      $dni_persona      = $_POST['txt_dniper'];
   	      $nombre_persona   = $_POST['txt_nombreper'];
          $apellido_persona = $_POST['txt_apellidoper'];
          $email_persona    = $_POST['txt_emailper'];
          $password_persona = $_POST['txt_passwordper'];
          $carrera          = $_POST['carrera'];
          $mencion          = $_POST['mencion'];
          $modalidad        = $_POST['modalidad'];
          $jornada          = $_POST['jornada'];
          $nacionalidad     = $_POST['nacionalidad'];


   	      $insertar=$pdo->prepare("INSERT INTO persona(dni_persona, nombres_persona, apellidos_persona, email_persona, password_persona, carrera, mencion,modalidad,jornada, pais) VALUES(?,?,?,?,?,?,?,?,?,?)");

   	          $insertar->bindParam(1, $dni_persona);
   	          $insertar->bindParam(2, $nombre_persona);
              $insertar->bindParam(3, $apellido_persona);
              $insertar->bindParam(4, $email_persona);
              $insertar->bindParam(5, $password_persona);
              $insertar->bindParam(6, $carrera);
              $insertar->bindParam(7, $mencion);
              $insertar->bindParam(8, $modalidad);
              $insertar->bindParam(9, $jornada);
              $insertar->bindParam(10, $nacionalidad);


   	          if ($insertar->execute()) {
   	          	    echo "Datos almacenados correctamente";
   	          } else {
   	          	 echo "Error al guardar los datos";
   	           }

   	          $insertar->execute();
   	          header('location:../egresado.php');


   } else {
   	 echo "Falta algunos datos por llenar";
   	   header('location:');
   }










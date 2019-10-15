<?php     

   include_once('../admin/clases/conexion.php');


       $identidad   = $_POST['identidad'];
       $nombre      = $_POST['nombre'];
       $apellido    = $_POST['apellido'];
       $nacimiento  = $_POST['nacimiento'];
       $nacionalidad= $_POST['nacionalidad'];
       $telefono    = $_POST['telefono'];
       $email       = $_POST['email'];
       $genero      = $_POST['genero'];      
       $grado       = $_POST['grado'];
       $carrera     = $_POST['carrera'];
       $mencion     = $_POST['mencion'];
       $modalidad   = $_POST['modalidad'];
       $formacion   = $_POST['formacion'];
       $ingreso     = $_POST['ingreso'];
       $egreso      = $_POST['egreso'];
       $graduacion  = $_POST['graduacion'];
       $ocupacion   = $_POST['ocupacion'];
       $empresa     = $_POST['empresa'];
      
        $insertar=$pdo->prepare("INSERT INTO datos_generales(dni, nombres, apellidos, fecha_nacimiento, nacionalidad, telefono, email, genero, acta_grado, carrera, mencion, modalidad, nivel_formacion, fecha_ingreso, fecha_egreso, fecha_graduacion, ocupacion_actual, nombre_empresa) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");


            $insertar->bindParam(1,  $identidad);
            $insertar->bindParam(2,  $nombre);
            $insertar->bindParam(3,  $apellido);
            $insertar->bindParam(4,  $nacimiento);
            $insertar->bindParam(5,  $nacionalidad);
            $insertar->bindParam(6,  $telefono);
            $insertar->bindParam(7,  $email);
            $insertar->bindParam(8,  $genero);           
            $insertar->bindParam(9,  $grado);
            $insertar->bindParam(10, $carrera);
            $insertar->bindParam(11, $mencion);
            $insertar->bindParam(12, $modalidad);
            $insertar->bindParam(13, $formacion);
            $insertar->bindParam(14, $ingreso);
            $insertar->bindParam(15, $egreso);
            $insertar->bindParam(16, $graduacion);
            $insertar->bindParam(17, $ocupacion);
            $insertar->bindParam(18, $empresa);

              if ($insertar->execute()) {
                    echo "Datos almacenados correctamente";
                    header('location:ficha.php');
              } else {
                 echo "Error al guardar los datos";
               }

              $insertar->execute();





   	   

   	         
   	    
   



<?php 
  require_once('./clases/conexion.php');

    $consulta = $pdo->prepare("SELECT * FROM datos_generales");

   $consulta->execute();

   if ($consulta->rowCount()>=1) {
   	 while ($fila = $consulta->fetch()) {
   	 	  echo "<tr>                  
	 	            <td>".$fila['dni']."</td>
	 	            <td>".$fila['nombres']."</td>  
                  <td>".$fila['apellidos']."</td>  
                  <td>".$fila['fecha_nacimiento']."</td>   
                  <td>".$fila['nacionalidad']."</td>    
                  <td>".$fila['telefono']."</td> 
                  <td>".$fila['genero']."</td> 
                  <td>".$fila['acta_grado']."</td>       
                  <td>".$fila['carrera']."</td> 
                  <td>".$fila['mencion']."</td>    
                  <td>".$fila['modalidad']."</td>  
                  <td>".$fila['nivel_formacion']."</td>
                  <td>".$fila['fecha_ingreso']."</td> 
                  <td>".$fila['fecha_egreso']."</td> 
                  <td>".$fila['fecha_graduacion']."</td>  
                  <td>".$fila['ocupacion_actual']."</td>  
                  <td>".$fila['nombre_empresa']."</td>          

   	 	       </tr>";
   	 }

   } else {
   	     echo "<tr>
   	 	              

   	 	       </tr>";
    }
   



 ?>
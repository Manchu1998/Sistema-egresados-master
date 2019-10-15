<?php 
  require_once('./clases/conexion.php');

   $consulta = $pdo->prepare("SELECT * FROM carrera");

   $consulta->execute();

   if ($consulta->rowCount()>=1) {
   	 while ($fila = $consulta->fetch()) {
   	 	  echo "<tr>
                  <td>".$fila['carrera_id']."</td>
   	 	            <td>".$fila['carrera_name']."</td>
   	 	            <td>".$fila['carrera_estado']."</td>                       
                   <td><a href='actualizaciones/actualizar_carrera?carrera_id=".$fila['carrera_id']."' class='btn btn-primary'>Editar </a></td>
                  <td><a href='eliminar/eliminar_carrera.php?carrera_id=".$fila['carrera_id']."' class='btn btn-warning' >Eliminar</a></td>
   	 	       </tr>";
   	 }

   } else {
   	     echo "<tr>
   	 	              

   	 	       </tr>";
    }
   



 ?>
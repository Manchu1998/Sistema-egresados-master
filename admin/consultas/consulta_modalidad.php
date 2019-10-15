<?php 
  require_once('./clases/conexion.php');

    $consulta = $pdo->prepare("SELECT * FROM modalidad");
   
   $consulta->execute();

   if ($consulta->rowCount()>=1) {
   	 while ($fila = $consulta->fetch()) {
   	 	  echo "<tr>
                  <td>".$fila['modalidad_id']."</td>
   	 	            <td>".$fila['modalidad_name']."</td>
   	 	            <td>".$fila['modalidad_estado']."</td>                     	 	        
                 <td><a href='actualizaciones/actualizar_modalidad?modalidad_id=".$fila['modalidad_id']."' class='btn btn-primary'>Editar </a></td>
                 <td><a href='eliminar/eliminar_modalidad.php?modalidad_id=".$fila['modalidad_id']."' class='btn btn-warning'>Eliminar</a></td>

   	 	       </tr>";
   	 }

   } else {
   	     echo "<tr>
   	 	              

   	 	       </tr>";
    }
   



 ?>
  <?php 
  require_once('./clases/conexion.php');

   $consulta = $pdo->prepare("SELECT * FROM horario_clases");
   $consulta->execute();

   if ($consulta->rowCount()>=1) {
   	 while ($fila = $consulta->fetch()) {
   	 	  echo "<tr>
                  <td>".$fila['horario_id']."</td>
   	 	            <td>".$fila['horario']."</td>
   	 	            <td>".$fila['estado']."</td>   	 	        
                  <td><a href='actualizaciones/actualizar_horario?horario_id=".$fila['horario_id']."' class='btn btn-primary'>Editar </a></td>
                  <td><a href='eliminar/eliminar_horario.php?horario_id=".$fila['horario_id']."' class='btn btn-warning' >Eliminar</a></td>
   	 	       </tr>";
   	 }

   } else {
   	     echo "<tr>
   	 	             

   	 	       </tr>";
    }
   



 ?>
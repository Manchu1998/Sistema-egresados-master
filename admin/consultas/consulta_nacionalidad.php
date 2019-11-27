<?php
  require_once('./clases/conexion.php');

   $consulta = $pdo->prepare("SELECT * FROM pais");
   $consulta->execute();

   if ($consulta->rowCount()>=1) {
   	 while ($fila = $consulta->fetch()) {
   	 	  echo "<tr>
   	 	            <td>".$fila['pais_nombre']."</td>
                 <td><a href='actualizaciones/actualizar_nacionalidad.php?pais_id=".$fila['pais_id']."' class='btn btn-primary'>Editar </a></td>
                 <td><a href='eliminar/eliminar_nacionalidad.php?pais_id=".$fila['pais_id']."' class='btn btn-warning'>Eliminar</a></td>

   	 	       </tr>";
   	 }

   } else {
   	     echo "<tr>


   	 	       </tr>";
    }




 ?>
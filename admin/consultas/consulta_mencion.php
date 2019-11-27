<?php
  require_once('./clases/conexion.php');

    $consulta = $pdo->prepare("SELECT * FROM mencion");

   $consulta->execute();

   if ($consulta->rowCount()>=1) {
   	 while ($fila = $consulta->fetch()) {
   	 	  echo "<tr>
   	 	            <td>".$fila['mencion_mencion']."</td>
   	 	            <td>".$fila['estado']."</td>
                  <td><a href='actualizaciones/actualizar_mencion.php?mencion_id=".$fila['mencion_id']."' class='btn btn-primary'>Editar </a></td>
                  <td><a href='eliminar/eliminar_mencion.php?mencion_id=".$fila['mencion_id']."' class='btn btn-warning' >Eliminar</a></td>

   	 	       </tr>";
   	 }

   } else {
   	     echo "<tr>


   	 	       </tr>";
    }




 ?>
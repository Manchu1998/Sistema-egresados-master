<?php
  require_once('./clases/conexion.php');

   $consulta = $pdo->prepare("SELECT persona_id, dni_persona, nombres_persona, apellidos_persona, email_persona, carrera.carrera_name, mencion.mencion_mencion, modalidad.modalidad_name, horario_clases.horario ,pais.pais_nombre FROM persona
         INNER JOIN carrera ON persona.carrera =carrera.carrera_id
         INNER JOIN mencion ON persona.mencion = mencion.mencion_id
         INNER JOIN modalidad ON persona.modalidad = modalidad.modalidad_id
         INNER JOIN horario_clases ON persona.jornada = horario_clases.horario_id
         INNER JOIN pais ON persona.pais = pais.pais_id");

   $consulta->execute();

   if ($consulta->rowCount()>=1) {
   	 while ($fila = $consulta->fetch()) {
   	 	  echo "<tr>
   	 	            <td>".$fila['dni_persona']."</td>
   	 	            <td>".$fila['nombres_persona']."</td>
                     <td>".$fila['apellidos_persona']."</td>
                     <td>".$fila['email_persona']."</td>
                     <td>".$fila['carrera_name']."</td>
                     <td>".$fila['mencion_mencion']."</td>
                     <td>".$fila['modalidad_name']."</td>
                     <td>".$fila['horario']."</td>
                     <td>".$fila['pais_nombre']."</td>
                     <td><a href='actualizaciones/actualizar_egresado.php?persona_id=".$fila['persona_id']."' class='btn btn-primary'>Editar </a></td>
                     <td><a href='eliminar/eliminar_egresado.php?persona_id=".$fila['persona_id']."' class='btn btn-warning'>Eliminar</a></td>

   	 	       </tr>";
   	 }

   } else {
   	     echo "<tr>


   	 	       </tr>";
    }




 ?>
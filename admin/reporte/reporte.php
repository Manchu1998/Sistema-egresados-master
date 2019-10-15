<?php  
  header('Content-type: application/xls');
  header('Content-Disposition: attachment; filename=egresado.xls');

  require_once('../clases/conexion.php');

  $reportar= $pdo->prepare("SELECT * FROM datos_generales");
  $reportar->execute();

 ?>

 <table>
 	<tr>
 		<td>Numero</td>
 		<td>Identidad</td>
 		<td>Nombres</td>
 		<td>Apellidos</td>
 		<td>Fecha de nacimiento</td>
 		<td>Nacionalidad</td>
 		<td>Telefono</td>
 		<td>Email</td>
 		<td>Genero</td>
 		<td>Acta de grado</td>
 		<td>Carrera</td>
 		<td>Mencion</td>
 		<td>Modalidad</td>
 		<td>Nivel de formacion</td>
 		<td>Fecha de ingreso</td>
 		<td>Fecha de egreso</td>
 		<td>Fecha de graduacion</td>
 		<td>Ocupacion actual</td>
 		<td>Nombre de la empresa</td>
 	</tr>
     <?php 
      if ($reportar->rowCount()>=1) {
      	  while ($fila = $reportar->fetch()) {
      	  	?>
      	  	 <tr>
      	  	 	<td><?php echo $fila['id']; ?></td>
      	  	 	<td><?php echo $fila['dni']; ?></td>
      	  	 	<td><?php echo $fila['nombres']; ?></td>
      	  	 	<td><?php echo $fila['apellidos']; ?></td>
      	  	 	<td><?php echo $fila['fecha_nacimiento']; ?></td>
      	  	 	<td><?php echo $fila['nacionalidad']; ?></td>
      	  	 	<td><?php echo $fila['telefono']; ?></td>
      	  	 	<td><?php echo $fila['email']; ?></td>
      	  	 	<td><?php echo $fila['genero']; ?></td>
      	  	 	<td><?php echo $fila['acta_grado']; ?></td>
      	  	 	<td><?php echo $fila['carrera']; ?></td>
      	  	 	<td><?php echo $fila['mencion']; ?></td>
      	  	 	<td><?php echo $fila['modalidad']; ?></td>
      	  	 	<td><?php echo $fila['nivel_formacion']; ?></td>
      	  	 	<td><?php echo $fila['fecha_ingreso']; ?></td>
      	  	 	<td><?php echo $fila['fecha_egreso']; ?></td>
      	  	 	<td><?php echo $fila['fecha_graduacion']; ?></td>
      	  	 	<td><?php echo $fila['ocupacion_actual']; ?></td>
      	  	 	<td><?php echo $fila['nombre_empresa']; ?></td>

           
      	  	 </tr>             

      	  	<?php
      	  }
      }
     ?>
 	<tr>
 		
 	</tr>
 </table>
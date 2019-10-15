<?php  
//Recuperar los datos.
   if (isset($_GET['persona_id'])) {

   	include_once('../clases/conexion.php');  	

        
        $nacionalidad = $_GET['persona_id'];
        $consulta = $pdo->prepare("SELECT * FROM persona WHERE persona_id=:persona_id");

        $consulta->bindParam(":persona_id", $nacionalidad);
        $consulta->execute();
        

        //Consultando de la tabla carrera.
        $consultar_carrera = $pdo->prepare("SELECT * FROM carrera");
        $consultar_carrera->execute();

        $consultar_mencion = $pdo->prepare("SELECT * FROM mencion");
        $consultar_mencion->execute();        	
     
         
        //Consultando de la tabla carrera.
        $consultar_modalidad = $pdo->prepare("SELECT * FROM modalidad");
        $consultar_modalidad->execute();

        //Consultando de la tabla carrera.
        $consultar_horario = $pdo->prepare("SELECT * FROM horario_clases");
        $consultar_horario->execute();

        //Consultando de la tabla carrera.
        $consultar_pais = $pdo->prepare("SELECT * FROM pais");
        $consultar_pais->execute();

          if ($consulta->RowCount()>=1) {
          	   $fila = $consulta->fetch();
?>
           	   <form action="" method="POST">
						<div class="card">

							<div class="card-header">
								<div class="card-title"><strong>ACTUALIZAR LOS DATOS DE LOS EGRESADOS O GRADUADOS</strong></div>
							</div>

							<div class="card-body">							  
                                 <input type="hidden" name="persona_id"  value="<?php echo $fila['persona_id']; ?>">
                                
							    <div class="form-group">
									<label for="text">Identidad</label>
									<input type="text" name="dni" class="form-control"  value="<?php echo $fila['dni_persona']; ?>">								
								</div>

								  <div class="form-group">
									<label for="text">Nombres</label>
									<input type="text" name="nombre" class="form-control"  value="<?php echo $fila['nombres_persona']; ?>">								
								</div>

								  <div class="form-group">
									<label for="text">Apellidos</label>
									<input type="text" name="apellido" class="form-control"  value="<?php echo $fila['apellidos_persona']; ?>">								
								  </div>

								  
								  <!-- Hacemos un recorrido de los registros de la tabla CARRERA presentar en el select -->
								   <div class="form-group">
									<label for="text">Carrera</label>	
									 <select name="carrera" class="form-control">								 
									 	<?php 									 	   
                                          foreach ($consultar_carrera as $r) {
                                             echo "<option value=".$r[0].">".$r[1]."</option>";
                                           } 
                                        ?>
									 </select>
								   </div>

                                    <!-- Hacemos un recorrido de los registros de la tabla MENCION presentar en el select -->
								   <div class="form-group">
									<label for="text">Mencion</label>	
									 <select name="mencion" class="form-control">									 
									 	<?php 									 	   
                                          foreach ($consultar_mencion as $me) {
                                             echo "<option value=".$me[0].">".$me[1]."</option>";
                                           } 
                                        ?>
									 </select>
								   </div>


                                    <!-- Hacemos un recorrido de los registros de la tabla MODADLIDAD presentar en el select -->
								  <div class="form-group">
									<label for="text">Modalidad</label>	
									 <select name="modalidad" class="form-control">									 
									 	<?php 									 	   
                                          foreach ($consultar_modalidad as $m) {
                                             echo "<option value=".$m[0].">".$m[1]."</option>";
                                           } 
                                        ?>
									 </select>
								   </div>

                                  <!-- Hacemos un recorrido de los registros de la tabla JORNADA presentar en el select -->
								  <div class="form-group">
									<label for="text">Jornada</label>	
									 <select name="jornada" class="form-control">									 
									 	<?php 									 	   
                                          foreach ($consultar_horario as $h) {
                                             echo "<option value=".$h[0].">".$h[1]."</option>";
                                           } 
                                        ?>
									 </select>
								   </div>

                                   <!-- Hacemos un recorrido de los registros de la tabla NACIONALIDAD presentar en el select -->
								   <div class="form-group">
									<label for="text">Nacionalidad</label>	
									 <select name="pais" class="form-control">									 
									 	<?php 									 	   
                                          foreach ($consultar_pais as $p) {
                                             echo "<option value=".$p[0].">".$p[1]."</option>";
                                           } 
                                        ?>
									 </select>
								   </div>


							</div>

							<div class="card-action">									
								<a href="../egresado.php"  class="btn btn-info">Cancelar</a>
								<button class="btn btn-success">Actualizar datos</button>
							</div>

						</div>
					</form>	


        <?php 


          } else {
          	 echo "Ocurrio un error";
          }          
     


         //Proceso para actualizar datos     
		if (isset($_POST['persona_id']) && isset($_POST['persona_id'])) {

            $id_persona = $_POST['persona_id'];
			$dni_persona = $_POST['dni'];	
			$nombre = $_POST['nombre'];
			$apellidos = $_POST['apellido'];
			$carrera = $_POST['carrera'];
			$mencion = $_POST['mencion'];
			$modalidad = $_POST['modalidad'];
			$jornada = $_POST['jornada'];
			$pais = $_POST['pais'];


			$actualizar_egresado = $pdo->prepare("UPDATE persona SET dni_persona=:dni, nombres_persona=:nombre, apellidos_persona=:apellido, carrera=:carrera, mencion=:mencion, modalidad=:modalidad, jornada=:jornada, pais=:pais WHERE  persona_id=:persona_id");

			$actualizar_egresado->bindParam(':dni', $dni_persona);			
			$actualizar_egresado->bindParam(':nombre', $nombre);
			$actualizar_egresado->bindParam(':apellido', $apellidos);
			$actualizar_egresado->bindParam(':carrera', $carrera);
			$actualizar_egresado->bindParam(':mencion', $mencion);
			$actualizar_egresado->bindParam(':modalidad', $modalidad);
			$actualizar_egresado->bindParam(':jornada', $jornada);
			$actualizar_egresado->bindParam(':nacionalidad', $pais);

			$actualizar_egresado->bindParam(':persona_id', $id_persona);

			if($actualizar_egresado->execute()) {
				echo "Datos Actualizados";
				header('location:');
			}else{
				echo "Error al actualizar egresado";
				header('location:editar_egresado.php');
			}
		}



    }else {
   	 echo "Error, llamar al Administrador";
   }
?>
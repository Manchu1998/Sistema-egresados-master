<?php  
//Actualizar datos//

//Recuperar los datos.
   if (isset($_GET['modalidad_id'])) {

   	include_once('../clases/conexion.php');  	

        
        $modalidad = $_GET['modalidad_id'];
        $consulta = $pdo->prepare("SELECT * FROM modalidad WHERE modalidad_id =:modalidad_id");

        $consulta->bindParam(":modalidad_id", $modalidad);
        $consulta->execute();

          if ($consulta->RowCount()>=1) {
          	   $fila = $consulta->fetch();
          	   echo '<form action="" method="POST">
						<div class="card">

							<div class="card-header">
								<div class="card-title"><strong>ACTUALIZAR LOS DATOS DE MODADLIDAD</strong></div>
							</div>

							<div class="card-body">							  
                                 <input type="hidden" name="modalidad_id"  value="'.$fila['modalidad_id'].'">

							    <div class="form-group">
									<label for="text">Modalidad</label>
									<input type="text" name="modalidad" class="form-control"  value="'.$fila['modalidad_name'].'">								
								</div>

								<div class="form-group">
									<label for="text">Estado</label>
									<input type="text" name="estado" class="form-control" value="'.$fila['modalidad_estado'].'">
								</div>									

							</div>

							<div class="card-action">									
								<a href="../modalidad.php"  class="btn btn-info">Cancelar</a>
								<button class="btn btn-success">Actualizar datos</button>
							</div>

						</div>
					</form>	';
          } else {
          	 echo "Ocurrio un error";
          }          
       


         //Proceso para actualizar datos
     
		if (isset($_POST['modalidad']) && isset($_POST['modalidad'])) {

			$modalidad = $_POST['modalidad_id'];
			$modalidad_nombre = $_POST['modalidad'];
			$modalidad_estado = $_POST['estado'];

			$consulta1 = $pdo->prepare("UPDATE modalidad SET modalidad_name=:modalidad, modalidad_estado=:estado WHERE  modalidad_id=:modalidad_id");

			$consulta1->bindParam(':modalidad', $modalidad_nombre);
			$consulta1->bindParam(':estado', $modalidad_estado);
			$consulta1->bindParam(':modalidad_id', $modalidad);

			if($consulta1->execute()) {
				echo "Datos Actualizados";
			}else{
				echo "Error";
			}
		}

		




    }else {
   	 echo "Error, no se pudo procesar la peticion";
   }

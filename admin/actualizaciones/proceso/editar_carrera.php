<?php  
//Actualizar datos//

//Recuperar los datos.
   if (isset($_GET['carrera_id'])) {

   	include_once('../clases/conexion.php');  	

        
        $modalidad = $_GET['carrera_id'];
        $consulta = $pdo->prepare("SELECT * FROM carrera WHERE carrera_id=:carrera_id");

        $consulta->bindParam(":carrera_id", $modalidad);
        $consulta->execute();

          if ($consulta->RowCount()>=1) {
          	   $fila = $consulta->fetch();
          	   echo '<form action="" method="POST">
						<div class="card">

							<div class="card-header">
								<div class="card-title"><strong>ACTUALIZAR LOS DATOS DE LA CARRERA</strong></div>
							</div>

							<div class="card-body">							  
                                 <input type="hidden" name="carrera_id"  value="'.$fila['carrera_id'].'">

							    <div class="form-group">
									<label for="text">Carrera</label>
									<input type="text" name="carrera" class="form-control"  value="'.$fila['carrera_name'].'">								
								</div>

								<div class="form-group">
									<label for="text">Estado</label>
									<input type="text" name="estado" class="form-control" value="'.$fila['carrera_estado'].'">
								</div>									

							</div>

							<div class="card-action">									
								<a href="../carrera.php"  class="btn btn-info">Cancelar</a>
								<button class="btn btn-success">Actualizar datos</button>
							</div>

						</div>
					</form>	';
          } else {
          	 echo "Ocurrio un error";
          }          
       


         //Proceso para actualizar datos
     
		if (isset($_POST['carrera']) && isset($_POST['carrera'])) {

			$carrera = $_POST['carrera_id'];
			$carrera_nombre = $_POST['carrera'];
			$carrera_estado = $_POST['estado'];

			$consulta1 = $pdo->prepare("UPDATE carrera SET carrera_name=:carrera, carrera_estado=:estado WHERE  carrera_id=:carrera_id");

			$consulta1->bindParam(':carrera', $carrera_nombre);
			$consulta1->bindParam(':estado', $carrera_estado);
			$consulta1->bindParam(':carrera_id', $carrera);

			if($consulta1->execute()) {
				echo "Datos Actualizados";
				header('location:../carrera.php');
			}else{
				echo "Error";
			}
		}

		




    }else {
   	 echo "Error, no se pudo procesar la peticion";
   }

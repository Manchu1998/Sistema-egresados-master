<?php  
//Actualizar datos//

//Recuperar los datos.
   if (isset($_GET['mencion_id'])) {

   	include_once('../clases/conexion.php');  	

        
        $modalidad = $_GET['mencion_id'];
        $consulta = $pdo->prepare("SELECT * FROM mencion WHERE mencion_id=:mencion_id");

        $consulta->bindParam(":mencion_id", $modalidad);
        $consulta->execute();

          if ($consulta->RowCount()>=1) {
          	   $fila = $consulta->fetch();
          	   echo '<form action="" method="POST" autocomplete="off">
						<div class="card">

							<div class="card-header">
								<div class="card-title"><strong>ACTUALIZAR LOS DATOS DE MENCIONES</strong></div>
							</div>

							<div class="card-body">							  
                                 <input type="hidden" name="mencion_id"  value="'.$fila['mencion_id'].'">

							    <div class="form-group">
									<label for="text">Modalidad</label>
									<input type="text" name="mencion" class="form-control"  value="'.$fila['mencion_mencion'].'">								
								</div>

								<div class="form-group">
									<label for="text">Estado</label>
									<input type="text" name="estado" class="form-control" value="'.$fila['estado'].'">
								</div>									

							</div>

							<div class="card-action">									
								<a href="../mencion.php"  class="btn btn-info">Cancelar</a>
								<button class="btn btn-success">Actualizar datos</button>
							</div>

						</div>
					</form>	';
          } else {
          	 echo "Ocurrio un error";
          }          
       


         //Proceso para actualizar datos
     
		if (isset($_POST['mencion']) && isset($_POST['mencion'])) {

			$mencion = $_POST['mencion_id'];
			$mencion_nombre = $_POST['mencion'];
			$mencion_estado = $_POST['estado'];

			$consulta1 = $pdo->prepare("UPDATE mencion SET mencion_mencion=:mencion, estado=:estado WHERE  mencion_id=:mencion_id");

			$consulta1->bindParam(':mencion', $mencion_nombre);
			$consulta1->bindParam(':estado', $mencion_estado);
			$consulta1->bindParam(':mencion_id', $mencion);

			if($consulta1->execute()) {
				echo "Datos Actualizados";
				header('location:../mencion.php');


			}else{
				echo "Error";
			}
		}
    }else {
   	 echo "Error, no se pudo procesar la peticion";
   }

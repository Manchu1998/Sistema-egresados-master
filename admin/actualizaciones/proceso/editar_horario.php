<?php  
//Actualizar datos//

//Recuperar los datos.
   if (isset($_GET['horario_id'])) {

   	include_once('../clases/conexion.php');  	

        
        $horario = $_GET['horario_id'];
        $consulta = $pdo->prepare("SELECT * FROM horario_clases WHERE horario_id =:horario_id");
        $consulta->bindParam(":horario_id", $horario);
        $consulta->execute();

          if ($consulta->RowCount()>=1) {
          	   $fila = $consulta->fetch();
          	   echo '<form action="" method="POST">
						<div class="card">

							<div class="card-header">
								<div class="card-title">ACTUALIZAR LOS DATOS DE HORARIO</div>
							</div>

							<div class="card-body">							  
                                 <input type="hidden" name="horario_id"  value="'.$fila['horario_id'].'"	>

							    <div class="form-group">
									<label for="text">Horario</label>
									<input type="text" name="horario" class="form-control"  value="'.$fila['horario'].'" id="text" placeholder="Actualizar datos">								
								</div>

								<div class="form-group">
									<label for="text">Hora</label>
									<input type="text" name="hora" class="form-control" value="'.$fila['estado'].'"  id="text" placeholder="Hora de horario">
								</div>	

							</div>

							<div class="card-action">									
								<a href="../horario.php"  class="btn btn-info">Cancelar</a>
								<button class="btn btn-success">Actualizar datos</button>
							</div>

						</div>
					</form>	';
          } else {
          	 echo "Ocurrio un error";
          }          
       


       if (isset($_POST['horario']) && isset($_POST['horario'])) {
			$horario = $_POST['horario_id'];
			$horario_nombre = $_POST['horario'];
			$hora = $_POST['hora'];

			$consulta1 = $pdo->prepare("UPDATE horario_clases SET horario=:horario, estado=:hora WHERE horario_id=:horario_id");
			$consulta1->bindParam(':horario', $horario_nombre);
			$consulta1->bindParam(':hora', $hora);
			$consulta1->bindParam(':horario_id', $horario);

			if($consulta1->execute()) {
				echo "Datos Actualizados";
				header('location:../horario.php');
			}else{
				echo "Error";
			}

		}




    }else {
   	 echo "Error, no se pudo procesar la peticion";
   }

<?php  
//Actualizar datos//

//Recuperar los datos.
   if (isset($_GET['pais_id'])) {

   	include_once('../clases/conexion.php');  	

        
        $nacionalidad = $_GET['pais_id'];
        $consulta = $pdo->prepare("SELECT * FROM pais WHERE pais_id=:pais_id");

        $consulta->bindParam(":pais_id", $nacionalidad);
        $consulta->execute();

          if ($consulta->RowCount()>=1) {
          	   $fila = $consulta->fetch();
          	   echo '<form action="" method="POST">
						<div class="card">

							<div class="card-header">
								<div class="card-title"><strong>ACTUALIZAR LOS DATOS DE NACIONALIDADES</strong></div>
							</div>

							<div class="card-body">							  
                                 <input type="hidden" name="pais_id"  value="'.$fila['pais_id'].'">

							    <div class="form-group">
									<label for="text">Nacionalidad</label>
									<input type="text" name="nacionalidad" class="form-control"  value="'.$fila['pais_nombre'].'">								
								</div>
														

							</div>

							<div class="card-action">									
								<a href="../nacionalidad.php"  class="btn btn-info">Cancelar</a>
								<button class="btn btn-success">Actualizar datos</button>
							</div>

						</div>
					</form>	';
          } else {
          	 echo "Ocurrio un error";
          }          
       


         //Proceso para actualizar datos
     
		if (isset($_POST['nacionalidad'])) {

			$nacionalidad = $_POST['pais_id'];
			$nacionalidad_nombre = $_POST['nacionalidad'];			

			$consulta1 = $pdo->prepare("UPDATE pais SET pais_nombre=:nacionalidad WHERE  pais_id=:pais_id");

			$consulta1->bindParam(':nacionalidad', $nacionalidad_nombre);			
			$consulta1->bindParam(':pais_id', $nacionalidad);

			if($consulta1->execute()) {
				echo "Datos Actualizados";
				header('location:../nacionalidad.php');
			}else{
				echo "Error";
			}
		}

		




    }else {
   	 echo "Error, llamar al Administrador";
   }

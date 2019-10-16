<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>SEI | Sistema Egresado de ITSAE </title>
  <?php  require_once "include/link_header.php"; ?>
</head>


<body class="nav-md">
	<div class="container body">
      <div class="main_container">
          <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
              <div class="navbar nav_title" style="border: 0;">
                <a href="inicio.php" class="site_title"><i class="fa fa-user"></i> <span>SEI</span></a>
              </div>
              <div class="clearfix"></div>


              <div class="profile clearfix">
                 <div class="profile_pic">
                    <img src="../assets/img/itsae.png" alt="..." class="img-circle profile_img">
                  </div>
                  <div class="profile_info">
                    <span>Administrador,</span>
                    <h2>Admin.</h2>
                  </div>
              </div>

              <br />

              <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3>General</h3>
                  <ul class="nav side-menu">
                    <li><a><i class="fa fa-cog"></i>Configuración<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="horario.php">Jornada</a></li>
                        <li><a href="modalidad.php">Modalidad</a></li>
                        <li><a href="carrera.php">Carrera</a></li>
                        <li><a href="mencion.php">Mencion</a></li>
                        <li><a href="nacionalidad.php">Nacionalidad</a></li>
                      </ul>
                    </li>

                     <li><a><i class="fa fa-folder-open-o"></i>Ingresar datos<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="egresado.php">Egresados</a></li>

                      </ul>
                    </li>

                    <li><a><i class="fa fa-users"></i>Datos<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="datos_egresado.php">Datos generales</a></li>

                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        <?php require_once "include/perfil.php"; ?>



        <div class="right_col" role="main">
             <div class="page-title">
                <div class="title_left">
                  <h3><small>Inicio / Egresado o graduado</small></h3>
                </div>
                <div class="title_right">
                  <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Buscar...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Buscar</button>
                      </span>
                    </div>
                  </div>
                </div>
              </div>




            <button type="button" class="btn btn-dark" data-toggle="modal" data-target=".bs-example-modal-lg">Agregar persona </button>

              <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Datos personales de egresado o graduado</h2>

                              <div class="clearfix"></div>

                            </div>

                            <div class="x_content">
                              <br />


                              <form action="clases/insertar_egresado.php"  data-parsley-validate class="form-horizontal form-label-left" method="POST" autocomplete="off">


                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cedula de Identidad *<span class="required"></span>
                                  </label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" id="last-name" name="txt_dniper" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nombres *<span class="required"></span>
                                  </label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" id="last-name" name="txt_nombreper" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellidos *<span class="required"></span>
                                  </label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" id="last-name" name="txt_apellidoper" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>

                                 <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email *<span class="required"></span>
                                  </label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" id="last-name" name="txt_emailper" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>

                                 <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password *<span class="required"></span>
                                  </label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="password" id="last-name" name="txt_passwordper" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>

                                   <?php
                                      require_once('clases/conexion.php');

                                       $seleccionar = $pdo->prepare("SELECT * FROM carrera");
                                       $seleccionar->execute();
                                     ?>

                                      <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Carrera *</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                          <select class="form-control" name="carrera">
                                            <?php
                                              foreach ($seleccionar as $r) {
                                                 echo "<option value=".$r[0].">".$r[1]."</option>";
                                               }
                                             ?>
                                          </select>
                                        </div>
                                      </div>


                                       <?php
                                         //Consultado mencion.
                                        require_once('clases/conexion.php');

                                         $seleccionar = $pdo->prepare("SELECT * FROM mencion");
                                         $seleccionar->execute();
                                       ?>

                                        <div class="form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Mencion *</label>
                                          <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control" name="mencion">
                                              <?php
                                                foreach ($seleccionar as $r) {
                                                   echo "<option value=".$r[0].">".$r[1]."</option>";
                                                 }
                                               ?>
                                            </select>
                                          </div>
                                        </div>



                                       <?php
                                       //Consultado modalidad.
                                        require_once('clases/conexion.php');

                                         $seleccionar = $pdo->prepare("SELECT * FROM modalidad");
                                         $seleccionar->execute();
                                       ?>

                                        <div class="form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Modalidad *</label>
                                          <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control" name="modalidad">
                                              <?php
                                                foreach ($seleccionar as $r) {
                                                   echo "<option value=".$r[0].">".$r[1]."</option>";
                                                 }
                                               ?>
                                            </select>
                                          </div>
                                        </div>


                                         <?php
                                           //Consultado modalidad.
                                            require_once('clases/conexion.php');

                                             $seleccionar = $pdo->prepare("SELECT * FROM  horario_clases");
                                             $seleccionar->execute();
                                           ?>

                                            <div class="form-group">
                                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Jornada *</label>
                                              <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select class="form-control" name="jornada">
                                                  <?php
                                                    foreach ($seleccionar as $r) {
                                                       echo "<option value=".$r[0].">".$r[1]."</option>";
                                                     }
                                                   ?>
                                                </select>
                                              </div>
                                            </div>




                                       <?php
                                      require_once('clases/conexion.php');

                                       $seleccionar = $pdo->prepare("SELECT * FROM pais");
                                       $seleccionar->execute();
                                     ?>

                                      <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nacionalidad *</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                          <select class="form-control" name="nacionalidad">
                                            <?php
                                              foreach ($seleccionar as $r) {
                                                 echo "<option value=".$r[0].">".$r[1]."</option>";
                                               }
                                             ?>
                                          </select>
                                        </div>
                                      </div>


                                <div class="ln_solid"></div>
                                <div class="form-group">
                                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-6">
                                    <input class="btn btn-primary" type="submit" value="GUARDAR">

                                  </div>
                                </div>

                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


                 <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Datos</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>N* de persona</th>
                            <th>Identidad</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Carrera</th>
                            <th>Mencion</th>
                            <th>Modalidad</th>
                            <th>Jornada</th>
                            <th>Pais</th>
                            <th>Accion</th>
                            <th>Accion</th>
                          </tr>
                        </thead>


                        <tbody>
                          <?php include_once('consultas/consulta_egresado.php'); ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

        </div>


        <!--Pie de página -->
        <?php require_once('include/footer.php'); ?>

      </div>
    </div>

     <!-- Incluyendo los links de píe de página como: Jquery, DataTables, Js--->
    <?php require_once "include/link_footer.php"; ?>

</body>
</html>
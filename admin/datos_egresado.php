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
                <h4>Datos generales</h4>
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

          <?php include_once 'include/tabla_egresado.php'; ?>

          <div class="clearfix"></div>
        </div>
        <!--Pie de página -->
        <?php require_once('include/footer.php'); ?>
      </div>
    </div>

     <!-- Incluyendo los links de píe de página como: Jquery, DataTables, Js--->
    <?php require_once "include/link_footer.php"; ?>

</body>
</html>
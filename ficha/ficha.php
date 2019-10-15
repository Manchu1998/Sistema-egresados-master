<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Sistema Egresado Itsae | SEI</title>   
 
    <link rel="icon" href="../assets/img/itsae.png" type="image/ico" />
    <script src="estilo/assets/js/plugin/webfont/webfont.min.js"></script>   
    <link rel="stylesheet" href="estilo/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo/assets/css/azzara.min.css">  
    <link rel="stylesheet" href="estilo/assets/css/demo.css"> 
    <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=93624641-2c1b-4654-8cdc-c69154d49250"> </script>
<!-- End of  Zendesk Widget script -->
   
</head>

<body>
  <div class="wrapper">   
     <div class="main-header" data-background-color="purple">     
        <div class="logo-header">          
          <a href="ficha.php" class="logo">
            <img src="../assets/img/itsae.png" alt="navbar brand" class="navbar-brand" width="60px">
          </a>         
        </div>
      <!-- Finalizando el header -->

      <!-- Barra de navegacion-->
      <nav class="navbar navbar-header navbar-expand-lg">        
         <div class="container-fluid">          
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
             
              <li class="nav-item dropdown hidden-caret">
                <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-bell"></i>
                  <a href="loguout.php" class="btn btn-success">Salir</a>                  
                </a>                                
              </li>              
            </ul>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>


    <div class="main-panel">
      <div class="content">
        <div class="page-inner">          
          <h4 class="page-title">
             <div class="view-profile">
                <input type="button" class="btn btn-secondary btn-block" value="LLENAR LA FICHA">
              </div>
          </h4>
          <div class="row">
            <div class="col-md-8">
              <div class="card card-with-nav">
                <div class="card-header">
                  <div class="row row-nav-line">
                    <ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
                      <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#home" role="tab" aria-selected="true">Datos Personales</a> </li>                      
                    </ul>
                  </div>
                </div>
                
                <form action="registrar.php" method="POST" autocomplete="off">

                     <div class="card-body">
                       <div class="row mt-3">
                        <div class="col-md-6">
                          <div class="form-group form-group-default">
                            <label>Identidad</label>
                            <input type="text" class="form-control" name="identidad" placeholder="1465894332">
                          </div>
                        </div>                     
                      </div>

                      <div class="row mt-3">
                        <div class="col-md-6">
                          <div class="form-group form-group-default">
                            <label>Nombres</label>
                            <input type="text" class="form-control" name="nombre" placeholder="nombre">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-group-default">
                            <label>Apellidos</label>
                            <input type="text" class="form-control" name="apellido" placeholder="apellidos">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-group-default">
                            <label>Fecha de Nacimiento</label>
                            <input type="text" id="datepicker" class="form-control" name="nacimiento" placeholder="12/02/1997">
                          </div>
                        </div>
                         <div class="col-md-6">
                          <div class="form-group form-group-default">
                            <label>Nacionalidad</label>
                            <input type="text" class="form-control" name="nacionalidad" placeholder="Ecuatoriana">
                          </div>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-md-4">
                          <div class="form-group form-group-default">
                            <label>Telefono</label>
                            <input type="text" class="form-control"  name="telefono"  placeholder="+593 982549045">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group form-group-default">
                            <label>Genero</label>
                            <select class="form-control" id="gender" name="genero">
                              <option value="Masculino">Masculino</option>
                              <option value="Femenino">Femenino</option>
                              <option value="Otro">Otro</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group form-group-default">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="itsae@itsae.edu.ec">
                          </div>
                        </div>
                      </div>

                      <div class="row mt-3">
                        <div class="col-md-12">
                          <h5>Datos Academicos</h5>
                          <div class="form-group form-group-default">
                            <label>Nº de acta grado</label>
                            <input type="text" class="form-control"  name="grado" placeholder="Acta de grado">
                          </div>

                          <div class="row mt-3">
                            <div class="col-md-4">
                              <div class="form-group form-group-default">
                                <label>Carrera</label>
                                <input type="text" class="form-control"  name="carrera" placeholder="Desarrollo de software">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group form-group-default">
                                <label>Mencion</label>
                                <input type="text" class="form-control" name="mencion" placeholder="Mencion de su carrera">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group form-group-default">
                                <label>Modalidad</label>
                                <input type="text" class="form-control" name="modalidad" placeholder="Describa la modalidad de su mencion">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group form-group-default">
                                <label>Nivel de formacion</label>
                                <input type="text" class="form-control" name="formacion" placeholder="Master">
                              </div>
                            </div>
                          </div>

                          <div class="row mt-3">
                            <div class="col-md-4">
                              <div class="form-group form-group-default">
                                <label>Fecha de ingreso</label>
                                <input type="text" class="form-control"  name="ingreso"  placeholder="12/12/2019">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group form-group-default">
                                <label>Fecha de egreso</label>
                                <input type="text" class="form-control" name="egreso" placeholder="12/12/2019">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group form-group-default">
                                <label>Fecha de graduacion</label>
                                <input type="text" class="form-control" name="graduacion" placeholder="12/12/2020">
                              </div>
                            </div>
                          </div>
                        </div>                        
                        
                        
                        <div class="col-md-12">
                           <h5>Datos laborales</h5>                          
                          <div class="form-group form-group-default">
                            <label>Ocupacion actual</label>
                            <input type="text" class="form-control"  name="ocupacion" placeholder="Describa su ocupacion actual en la empresa que labora">
                          </div>
                        </div>
                        <div class="col-md-12">                         
                          <div class="form-group form-group-default">
                            <label>Empresa</label>
                            <input type="text" class="form-control" name="empresa" placeholder="Nombre de la empresa">
                          </div>
                        </div>                    
                        
                        
                      </div>                      
                      <div class="text-right mt-3 mb-3"> 
                        <a href="../admin/reporte/reporte_pdf.php" class="btn btn-success">Generar PDF</a>                      
                        <input type="submit" class="btn btn-danger" value="Enviar datos">
                      </div>
                    </div>

                </form>

              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile card-secondary">
                <div class="card-header" style="background-image: url('estilo/assets/img/blogpost.jpg')">
                  <div class="profile-picture">
                    <div class="avatar avatar-xl">
                      <img src="estilo/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="user-profile text-center">
                    <div class="name"><?php echo $_SESSION['nombres_persona']; ?></div>
                    <div class="desc"><small><?php echo $_SESSION['apellidos_persona']; ?></small></div>
                    <div class="job"><?php  echo $_SESSION['dni_persona']; ?></div>
                                        
                    <div class="view-profile">
                      <a href="#" class="btn btn-secondary btn-block">ITSAE</a>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row user-stats text-center">
                    <div class="col">
                      <div class="number">  </div>
                      <div class="title">Bienvenido</div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    
   
  </div>
  <!--   Core JS Files   -->
  <script src="estilo/assets/js/core/jquery.3.2.1.min.js"></script>
  <script src="estilo/assets/js/core/popper.min.js"></script>
  <script src="estilo/assets/js/core/bootstrap.min.js"></script>
  <!-- jQuery UI -->
  <script src="estilo/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  
  <!-- Moment JS -->
  <script src="estilo/assets/js/plugin/moment/moment.min.js"></script><!-- DateTimePicker --> 
  <!-- Bootstrap Toggle -->
  <script src="estilo/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
  <!-- jQuery Scrollbar -->
  <script src="estilo/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
  <!-- Azzara JS -->
  <script src="estilo/assets/js/ready.min.js"></script>
  <!-- Azzara DEMO methods, don't include it in your project! -->
  <script src="estilo/assets/js/setting-demo.js"></script>
 
</body> 

</html>
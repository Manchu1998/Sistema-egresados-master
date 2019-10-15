<?php 
  session_start();
  unset($_SESSION['usuario']);
?>

<!DOCTYPE html>
<html lang="es">
  <head>

    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>SEI | Sistema Egresado Itsae</title>

    <link rel="icon" href="assets/img/itsae.png" type="image/ico" />
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">   
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">   
    <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">    
    <link href="assets/vendors/animate.css/animate.min.css" rel="stylesheet">   
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
    
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form"> 
          <section class="login_content">


            <form action="controlador/login_admin.php" method="POST" autocomplete="off">

              <h1><i class="fa fa-user"></i> SEI</h1>
              <h2>Iniciar sesión</h2>
              <div>
                <input type="text" class="form-control" placeholder="Usuario" required="" name="usuario" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Contraseña" required=""  name="password" />
              </div>
              <div>
                <input class="btn btn-default submit" type="submit" value="Acceder" name="entrar">
                <a class="reset_pass" href="#">Olvisdaste tu contraseña?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">¿Aún no te has registrado?
                  <a href="#signup" class="to_register"> Registrate </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>                  
                  <p>©2019 Desarrollado por 5to nivel de sistemas</p>
                </div>
              </div>
            </form>
            

          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">

            <form action="admin/clases/insertar_usuario.php" method="POST"  autocomplete="off">
              <h1><i class="fa fa-users"></i>  SEI</h1>
              <h2>Crear cuenta</h2>
              <div>
                <input type="text" class="form-control" placeholder="Ingrese su usuario" name ="user"required="" />
              </div>              
              <div>
                <input type="password" class="form-control" placeholder="Ingresar su contraseña" name="password" required="" />
              </div>
              
              <div>
                <input class="btn btn-default submit" type="submit" name="registrarse" value="Enviar datos">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link"> Ya tienes una cuenta?
                  <a href="#signin" class="to_register">Acceder</a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>                 
                 <p>©2019 Desarrollado por 5to nivel de sistemas</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
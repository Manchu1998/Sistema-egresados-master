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

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">


            <form action="ficha/login.php" method="POST" autocomplete="off">

              <h1><i class="fa fa-user"></i>SEI</h1>
              <h2>Iniciar sesión</h2>
                <div>
                  <input type="text" class="form-control" placeholder="Identidad" required="" name="dni" />
                </div>

                 <div>
                  <input type="text" class="form-control" placeholder="Password" required="" name="password" />
                </div>
                <div>
                  <input class="btn btn-default submit" type="submit" value="Acceder" name="entrar">
                </div>

              <div class="clearfix"></div>

              <div class="separator">

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
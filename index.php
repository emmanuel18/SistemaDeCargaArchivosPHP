<?php

  /*
    En ocasiones el usuario puede volver al login
    aun si ya existe una sesion iniciada, lo correcto
    es no mostrar otra ves el login sino redireccionarlo
    a su pagina principal mientras exista una sesion entonces
    creamos un archivo que controle el redireccionamiento
  */

  session_start();

  // isset verifica si existe una variable o eso creo xd
  if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
    header('location: controller/redirec.php');
  }

?>
<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UJAT</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">


    <link rel="stylesheet" href="css/sweetalert.css">
    <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

    <!-- Navigation -->
  
    <nav class="navbar" >
      <div class="container" >
        <a class="navbar-brand" href="index.php"><img src="img/logo-2-negro.png" width="189" height="64"></a>
        <h4>Secretaría de Investigación, Posgrado y Vinculación</h4>
        <a class="btn btn-primary" href="registro.php">Registrate</a>
      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Estudia en la duda, <br> acción en la fé!</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
    
            
            <form action="controller/logincontroller.php" method="post">
              <div class="form-check" align="center">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="email" class="form-control form-control-lg" name="user_php" id="user" placeholder="Correo" required>
                  <br>
                  <input type="password" class="form-control form-control-lg" placeholder="Contraseña" name="clave_php" id="clave" required>
                  <br>
                  <button type="submit" class="btn btn-block btn-lg btn-primary" name="button" id="login">Iniciar Sesión</button>
                </div>
                
                  
                
              </div>
            </form>

      
          

          
          </div>
        </div>
      </div>
    </header>

   
    
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            
            <p class="text-muted small mb-4 mb-lg-0">&copy; <a href="http://www.ujat.mx/">UJAT</a> 2017. All Rights Reserved.</p>
          </div>
          
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert js -->
    <script src="js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="js/operaciones.js"></script>

  </body>

</html>

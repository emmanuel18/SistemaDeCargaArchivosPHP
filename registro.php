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
    header('location: controller/redirec.php');
  }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>

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

    <!--
      Las clases que utilizo en los divs son propias de Bootstrap
      si no tienes conocimiento de este framework puedes consultar la documentacion en
      https://v4-alpha.getbootstrap.com/getting-started/introduction/
    -->
<body class="full-cover-background" style="background-image:url(img/bg-masthead.jpg);">

     <nav class="navbar" style="background-color: whitesmoke;">
      <div class="container" >
        <a class="navbar-brand" href="index.php"><img src="img/logo-2-negro.png" width="189" height="64"></a>
        <h4>Secretaría de Investigación, Posgrador y Vinculación</h4>
        <a class="btn btn-primary" href="index.php">Inicia sesión</a>
      </div>
    </nav>
    <header class="text-white text-center">
    <!-- Formulario Login -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
          <!-- Margen superior (css personalizado )-->
          <div class="spacing-1"></div>

          <form action="controller/registroController.php" method="post">
            <!-- Estructura del formulario -->
            <fieldset>

              <legend class="center">Registro</legend>

              <!-- Caja de texto para usuario -->
              <label class="sr-only" for="user">Nombre</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="name" placeholder="Ingresa tu nombre" required>
              </div>

              <!-- Div espaciador -->
              <div class="spacing-2"></div>
              
              <!-- Caja de texto para usuario -->
              <label class="sr-only" for="user">Apellidos</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="apellido" placeholder="Ingresa tus apellidos" required>
              </div>

              <!-- Div espaciador -->
              <div class="spacing-2"></div>
              
              <!-- Caja de texto para usuario -->
              <label class="sr-only" for="user">Numero de Proyecto</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-archive"></i></div>
                <input type="text" class="form-control" name="numproy" placeholder="Numero de Proyecto" required>
              </div>

              <!-- Div espaciador -->
              <div class="spacing-2"></div>
              
              <!-- Caja de texto para usuario -->
              <label class="sr-only" for="user">Telefono</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-mobile-phone"></i></div>
                <input type="text" class="form-control" name="telefono" placeholder="Telefono" required>
              </div>

              <!-- Div espaciador -->
              <div class="spacing-2"></div>
              

              <!-- Caja de texto para usuario -->
              <label class="sr-only" for="user">Email</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-mail-reply"></i></div>
                <input type="email" class="form-control" name="email" placeholder="Ingresa tu email" required>
              </div>

              <!-- Div espaciador -->
              <div class="spacing-2"></div>

              <!-- Caja de texto para la clave-->
              <label class="sr-only" for="clave">Contraseña</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                <input type="password" autocomplete="off" class="form-control" name="clave" placeholder="Contraseña" required>
              </div>

              <!-- Div espaciador -->
              <div class="spacing-2"></div>

              <!-- Caja de texto para la clave-->
              <label class="sr-only" for="clave">Verificar contraseña</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                <input type="password" autocomplete="off" class="form-control" name="clave2" placeholder="Verificar contraseña" required>
              </div>

              <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->
              <div class="row" id="load" hidden="hidden">
                <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                  <img src="img/load.gif" width="100%" alt="">
                </div>
                <div class="col-xs-12 center text-accent">
                  <span>Validando información...</span>
                </div>
              </div>
              <!-- Fin load -->

              <!-- boton #login para activar la funcion click y enviar el los datos mediante ajax -->
              <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                  <div class="spacing-2"></div>
                  
                  <button type="submit" class="btn btn-primary btn-block" name="button" id="registro">Registrate</button>
                </div>
              </div>

            </fieldset>
          </form>
        </div>
      </div>
    </div>
	</header>
    <section >
    <br><br><br>
    <footer class="footer bg-light" style="background-color: whitesmoke;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            
            <p class="text-muted small mb-4 mb-lg-0">&copy; UJAT 2017. All Rights Reserved.</p>
          </div>
          
        </div>
      </div>
    </footer>
    </section>
    <!-- / Final Formulario login -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert js -->
    <script src="js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="js/operaciones.js"></script>
  </body>
</html>

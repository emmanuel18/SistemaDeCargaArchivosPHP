<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../../index.php');
  }
  $id=$_SESSION['id'];
  $active_facturas="active";
  $active_productos="";
  $active_clientes="";
  $active_usuarios="";
  $title="Facturas | Simple Invoice";
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
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../../css/landing-page.min.css" rel="stylesheet">


    <link rel="stylesheet" href="../../css/sweetalert.css">
    <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
    <link rel="stylesheet" href="../../css/style.css">
  </head>
  <body>
   <!-- Navigation -->
  
    <nav class="navbar" >
      <div class="container" >
        <a class="navbar-brand" href="index.php"><img src="../../img/logo-2-negro.png" width="189" height="64"></a>
        <h4>Secretaría de Investigación, Posgrado y Vinculación</h4>
        <a class="btn btn-primary" href="lista.php">Lista</a>
        <a class="btn btn-danger" href="../../controller/cerrarSesion.php">Cerrar sesión</a>
      </div>
    </nav>

  <?php
	  
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;


    if ($nombre != "") {
        if (copy($ruta, $destino)) {
			
            $titulo= $_POST['titulo'];
            $clasificacion= $_POST['clasificacion'];
            $folio= $_POST['folio'];
            $numproy= $_POST['numproy'];
			$cant= $_POST['cantidad'];
            $descri= $_POST['descripcion'];

            $db=new Conect_MySql();

            $sql = "INSERT INTO tbl_documentos(IdUser, nombre, clasificacion, cantidad, descripcion, tamanio, tipo, nombre_archivo, folio, numproy) VALUES('$id', '$titulo', '$clasificacion', '$cant', '$descri', '$tamanio','$tipo','$nombre', '$folio', '$numproy')";
            $query = $db->execute($sql);
            if($query){
               echo '<script languaje="javascript">alert("Se guardo correctamente");</script>';
            }
        } else {
            echo "Error";
        }
    }
}
?>


    
 
          <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
      
          

         
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <h4>Subir Factura</h4>
            <form method="post" action="" enctype="multipart/form-data">
              <div class="form-check" align="center">
              
               
              <select class="form-control form-control-lg" name="clasificacion" required>
                <option value="Vuelos">Vuelos</option> 
                <option value="Hospedaje">Hospedaje</option> 
                <option value="Transporte">Transporte</option>
                <option value="Alimentos">Alimentos</option> 
                <option value="Instrumentación">Instrumentación</option> 
                <option value="Equipo de laboratorio">Equipo de laboratorio</option> 
                <option value="Otros">Otros</option> 
              </select>
              <br>

              <input class="form-control form-control-lg" type="text" name="titulo" placeholder="Titulo de archivo" required>
              <br>
              <input class="form-control form-control-lg" type="text" name="folio" placeholder="Folio" required>
              <br>
              <input class="form-control form-control-lg" type="text" name="numproy" placeholder="Número de proyecto" required>
              <br>
              <input class="form-control form-control-lg" type="tel" name="cantidad" placeholder="Monto de la factura" required>
              <br>
              <textarea class="form-control form-control-lg"  name="descripcion" required>Descripción</textarea>
              <br>   
              <input class="form-control form-control-lg" type="file" name="archivo" required>
              <br>
              <input class="btn btn-block btn-lg btn-primary" type="submit" value="Subir" name="subir">
               
                 
              </div>  
            </form>
        </div>
</div>
        </div>
     
    </header>
      
        <div id="resultados"></div><!-- Carga los datos ajax -->
        <div class='outer_div'></div><!-- Carga los datos ajax -->
      </div>
    </div>

  </div>
  <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            
            <p class="text-muted small mb-4 mb-lg-0">&copy; UJAT 2017. All Rights Reserved.</p>
          </div>
          
        </div>
      </div>
    </footer>
  
  
  
  <!-- Bootstrap core JavaScript -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert js -->
    <script src="../../js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="../../js/operaciones.js"></script>

    <script type="text/javascript" src="js/VentanaCentrada.js"></script>
  <script type="text/javascript" src="js/facturas.js"></script>
  </body>
</html>

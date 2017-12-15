
<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  $id=$_SESSION['id'];
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    header('location: ../../index.php');
  }
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
        <a class="btn btn-primary" href="facturas.php">Regresar</a>
        <a class="btn btn-danger" href="../../controller/cerrarSesion.php">Cerrar sesión</a>
      </div>
    </nav>
     
     <header class="masthead text-black text-center">
      

          <table width="100%" bgcolor="#E8E8E8">
             
             
              <tr class="text-white" bgcolor="#555252">
				  <td>Titulo</td>
                  <td>Descripcion</td>
                  <td>Folio</td>
                  <td>Cantidad</td>
                  <td>Proyecto</td>
                  <td>Nombre</td>
                  <td>Eliminar archivo</td>
              </tr>
          <?php
          include 'config.inc.php';
          
          $db=new Conect_MySql();
			       
             $sql = "select * from tbl_documentos";
              $query = $db->execute($sql);
              while($datos=$db->fetch_row($query)){?>
              <tr style="font-color:#000000;">
                  <td><?php echo $datos['nombre']; ?></td>
                  <td><?php echo $datos['descripcion']; ?></td>
                  <td><?php echo $datos['folio']; ?></td>
                  <td><?php echo $datos['cantidad']; ?></td>
                  <td><?php echo $datos['numproy']; ?></td>
                  <td><a href="archivo.php?id=<?php echo $datos['Id']?>"><?php echo $datos['nombre_archivo']; ?></a></td>
                  <td><a href="eliminar.php?id=<?php echo $datos['Id']?>"><?php echo "Eliminar"; ?></a></td>
              </tr>

            <?php  } 

            ?>
          </div>
          </table>
     

       

      </form>
        <div id="resultados"></div><!-- Carga los datos ajax -->
        <div class='outer_div'></div><!-- Carga los datos ajax -->
      
</header>
 
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

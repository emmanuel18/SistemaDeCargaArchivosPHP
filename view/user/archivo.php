<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
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
       <nav class="navbar" >
      <div class="container" >
        <a class="navbar-brand" href="index.php"><img src="../../img/logo-2-negro.png" width="189" height="64"></a>
        <h4>Secretaría de Investigación, Posgrado y Vinculación</h4>
        <a class="btn btn-primary" href="facturas.php">Regresar</a>
        <a class="btn btn-primary" href="../../controller/cerrarSesion.php">Cerrar sesión</a>
      </div>
    </nav>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from tbl_documentos where Id=".$_GET['id'];
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['nombre_archivo']==""){?>
        <p>NO tiene archivos</p>
                <?php }else{ ?>
        <iframe width="100%" height="600px" src="archivos/<?php echo $datos['nombre_archivo']; ?>"></iframe>
                
                <?php } } ?>
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

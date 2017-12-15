<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
        $sql = "DELETE FROM tbl_documentos WHERE Id=".$_GET['id'];
        $query = $db->execute($sql);
		echo '<script languaje="javascript">alert("Factura eliminada correctamente");
		window.location.href="facturas.php";
		</script>';
        
        ?>
    </body>
</html>

<?php

  $name   = $_POST['name'];
  $apellido = $_POST['apellido'];
  $numproy = $_POST['numproy'];
  $telefono = $_POST['telefono'];
  $email  = $_POST['email'];
  $clave  = $_POST['clave'];
  $clave2 = $_POST['clave2'];

  if(empty($email) || empty($clave) || empty($clave2) || empty($name) || empty($apellido) || empty($numproy) || empty($telefono))
  {

    echo 'error_1'; // Un campo esta vacio y es obligatorio

  }else{

    if($clave == $clave2){
	 $conexion = mysqli_connect("127.0.0.1", "u338890849_root", "skatelove1", "u338890849_gerar");
     
     $verificarRegistros='select id from usuarios where email="'.$email.'" ';
	 $sql1=mysqli_query($conexion, $verificarRegistros);
		$numero = mysqli_num_rows($sql1);

      if($numero > 0){
        echo '<script languaje="javascript">alert("Error... El correo ya está registrado");</script>';
		  
      }else{
/*
        $query='insert into usuarios(nombre, apellido, numproy, email, clave, telefono, cargo) values("'.$name.'", "'.$apellido.'", "'.$numproy.'", "'.$email.'", MD5("'.$clave.'"), "'.$telefono.'", 2)'; */
		  $query = "INSERT INTO usuarios(nombre, apellido, numproy, email, clave, telefono, cargo) VALUES ('$name', '$apellido', '$numproy', '$email', MD5('$clave'), '$telefono', 2)";
               
       $sql= mysqli_query($conexion, $query);
       if (!$sql) {

       	echo 'Error ';
       	echo($query);

       }else{
		echo '<script languaje="javascript">alert("Registro exitoso, inicia sesión");
		window.location.href="../index.php";
		</script>';
        }

      }
		
		/*
        # Incluimos la clase usuario
        require_once('../model/usuario.php');

        # Creamos un objeto de la clase usuario
        $usuario = new Usuario();

        # Llamamos al metodo login para validar los datos en la base de datos
        $usuario -> registroUsuario($name, $apellido, $numproy, $telefono, $email, $clave);


     */


    }else{
      echo 'error_2';
    }

  }




?>

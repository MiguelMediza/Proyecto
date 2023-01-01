<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/logotipo.png">
    <title>HelpQR</title>
</head>
<body>
<?php //Abro el código php
require_once "../../conexion.php";
    //Creamos varibles para almacenar los valores recibidos por los "input" en el formulario de registro
    $name=$_POST['name'];
    $apellido=$_POST['apellido'];
    $user=$_POST['user'];
    $email=$_POST['email'];
    $cedula=$_POST['cedula'];
    $pais=$_POST['pais'];
    $departamento=$_POST['departamento'];
    $ciudad=$_POST['ciudad'];
    $pass=$_POST['pass'];
    $pass2=$_POST['pass2'];
    $pass_encriptada = hash('sha512', $pass); //Encriptamos la contraseña para guardarla en la BDD

    //Comprobamos que las 2 contraseñas ingresadas sean iguales, sino mostramos un mensaje que no coinciden
    if($pass != $pass2){

        echo "<script type='text/javascript'>
        swal({
          icon: 'error',
          text: 'Las contraseñas no coinciden',
          button: false
        });
    
      var myTimer = setTimeout(function () {
        window.location = 'login_registro.php';
      }, 3000);
    
      </script>";

        exit();

    }
    $conexion=conexion();
    //Variable para verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE email='$email' ");
    //Variable para verificar que el user no se repita en la base de datos
    $verificar_user = mysqli_query($conexion, "SELECT * FROM usuario WHERE Nombre_Usuario='$user' ");
    //Variable para verificar que el cedula no se repita en la base de datos
    $verificar_cedula = mysqli_query($conexion, "SELECT * FROM persona WHERE CI='$cedula' ");

    //Verificar que el correo no se repita en la base de datos
    if(mysqli_num_rows($verificar_correo) > 0){
    
        echo "<script type='text/javascript'>
        swal({
          icon: 'error',
          text: 'Este correo ya está registrado, intenta con otro',
          button: false
        });
    
      var myTimer = setTimeout(function () {
        window.location = 'login_registro.php';
      }, 3000);
    
      </script>";

        exit();
    
    }
        //Verificar que la cedula no se repita en la base de datos
        if(mysqli_num_rows($verificar_cedula) > 0){
    
            echo "<script type='text/javascript'>
            swal({
              icon: 'error',
              text: 'Está cédula ya está registrada, intenta con otra',
              button: false
            });
        
          var myTimer = setTimeout(function () {
            window.location = 'login_registro.php';
          }, 3000);
        
          </script>";
    
            exit();
        
        }
    //Verificar que el usuario no se repita en la base de datos
    if(mysqli_num_rows($verificar_user) > 0){
    
        echo "<script type='text/javascript'>
        swal({
          icon: 'error',
          text: 'Este usuario ya está en uso, intenta con otro',
          button: false
        });
    
      var myTimer = setTimeout(function () {
        window.location = 'login_registro.php';
      }, 3000);
    
      </script>";
     exit();

    }
    else{

        //creo una variable de conexión, esto lo utilizamos para conectarnos a la BBDD.
        $conexion=conexion();
        //Escribo mi sentencia SQL   
        $sql="INSERT into usuario (nombre, apellido, Nombre_Usuario, email, CI, Pais, Departamento, Ciudad, contrasena) 
        values ('$name','$apellido','$user','$email','$cedula','$pais','$departamento','$ciudad', '$pass_encriptada');";

        if (mysqli_query($conexion,$sql)){
        //Ejecuto la sentencia, en está función debo tener como parametros la sentencia sql y la variable que abre la conexión;

        //Cuando se registra el usuario, muestra un mensaje de que fue registrado satisfactorio       
        //Una vez muestre el mensaje redirige a la pestaña con el formulario para logear
        echo "<script type='text/javascript'>
        swal({
          icon: 'success',
          text: 'Usuario registrado exitosamente, inicia sesión para continuar',
          button: false
        });
    
      var myTimer = setTimeout(function () {
        window.location = 'login_registro.php';
      }, 3000);
    
      </script>";
             
    }
    mysqli_close($conexion);
}//Fin else

?>
</body>
</html>

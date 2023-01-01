<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../imagenes/logotipo.png">
    <title>HelpQR</title>
</head>
<body>
    
</body>
</html>
<?php 	
 if(!empty($_POST)){//Comprobamos que se hayan recidibo datos mediante POST
     
    //Creamos variables para almacenar los datos recibidos por los inputs del formulario de login
     $email = $_POST['email'];
     $password = $_POST['pass'];
     $captcha = $_POST['g-recaptcha-response'];
     
     $secret = '6LcPLRccAAAAAGqS4aQsC2DtwIgQ7UEIGHbBqPjj';//Es una variable para almacenar una contraseña brindada por google
     
     //Comprobamos si el captcha no existe, nos redirigue a las pestaña de login y nos marca que debemos completar el captcha
     if(!$captcha){
        echo "<script> window.location='login_registro.php?captch=none' </script>";

         exit();
         
         } else {//En el caso de que el captcha este completo entonces seguimos con el login del usuario
         
         $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");

         var_dump($response);
         
         $arr = json_decode($response, TRUE);
         
         if($arr['success']){

            session_start(); //Especificamos que vamos a trabajar con sessiones
            include '../../conexion.php';
            $conexion=conexion();
        
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $pass_encriptada = hash('sha512', $pass); //Encriptamos la contraseña para compararla con la contraseña que esta incriptada en la BDD
        
            //Seleccionamos los campos de correo y contraseña de la tabla usuario
            $validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE email='$email' AND contrasena='$pass_encriptada'");
            
            //Si encuentra una coicidencia devuelve TRUE osea (1) por eso el mayor a(0)
            if(mysqli_num_rows($validar_login) > 0 ){//En el caso de que encuentre una coincidencia en la BDD osea que el usuario y contraseña 
                                                                                            //existen nos redirigue a la pestaña de bienvenida
               while ($fila=mysqli_fetch_array($validar_login)){
               
                $_SESSION['id_usuario'] = $fila['ID_Usuario'];
                $_SESSION['nombre'] = $fila['Nombre'];
                $_SESSION['cant_maxima'] = $fila['Cantidad_Maxima'];
                $_SESSION['Tipo'] = $fila['Tipo_Usuario'];
            
                
              }
              $_SESSION['usuario'] = $email;
                header("location: ../../bienvenida.php");
                exit();
                session_destroy();
            }
            else{
                //En el caso de que no exista nos muestra un mensaje de que dicho usuario no existe
                echo "<script type='text/javascript'>
                swal({
                  icon: 'error',
                  text: 'Usuario no existente, por favor verificar los datos introducidos',
                  button: false
                });
            
              var myTimer = setTimeout(function () {
                window.location = '../../index.html';
              }, 3000);
            
              </script>";
            }
            exit();
             } else {//En el caso que no entre a ninguna de las opciones anteriores muestra un mensaje de error en el captcha
                 echo  "<script> alert ('Error al verificar el captcha'); </script>";
         }
         exit();
     }
 }


?>
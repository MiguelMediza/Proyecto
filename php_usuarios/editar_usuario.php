<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagenes/logotipo.png">
  <title>HelpQR</title>
</head>
<body>
<?php //Abro el código php
require_once "../conexion.php";
session_start();
$name=$_POST['nombre'];
$apellido=$_POST['apellido'];
$pais=$_POST['pais'];
$departamento=$_POST['departamento'];
$ciudad=$_POST['ciudad'];
$ID_Usuario=$_SESSION['id_usuario'];

$conexion=conexion();

$sql="SELECT FROM usuario WHERE ID_Usuario=".$ID_Usuario;



       $sql="UPDATE usuario SET Nombre='$name',Apellido='$apellido',Pais='$pais',Departamento='$departamento',Ciudad='$ciudad' WHERE ID_Usuario=$ID_Usuario;";
     
       if(mysqli_query($conexion,$sql)){

         
        //Ejecuto la sentencia, en está función debo tener como parametros la sentencia sql y la variable que abre la conexión;
        echo "<script type='text/javascript'>
        swal({
          icon: 'success',
          text: 'Usuario modificado correctamente',
          button: false
        });
    
      var myTimer = setTimeout(function () {
        window.location = 'form_editar.php';
      }, 2000);
    
      </script>";
     }
        mysqli_close($conexion);

?>
</body>
</html>
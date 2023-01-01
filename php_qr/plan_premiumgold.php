<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="../imagenes/logotipo.png">
    <title>HelpQR</title>
</head>
<body>
<?php
session_start();

require_once "../conexion.php";

$conexion=conexion();

$ID_Usuario=$_SESSION['id_usuario'];

     $sql="UPDATE usuario SET Tipo_Usuario='Premium Gold',Cantidad_Maxima='30' WHERE ID_Usuario=".$ID_Usuario.";";

        if (mysqli_query($conexion,$sql)){
            echo
            "<script type='text/javascript'>
             swal({
               icon: 'success',
               text: 'Plan Premium Gold adquirido, inicia sesión para aplicar los cambios',
               button: false
               
             });
       
             var myTimer = setTimeout(function () {
             window.location = '../index.html';
             }, 2000);
       
             </script>";
    } 
    mysqli_close($conexion);
?>
</body>
</html>
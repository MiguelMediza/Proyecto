<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta charset="utf-8">
      <link rel="shortcut icon" href="../imagenes/logotipo.png">
    <title></title>
  </head>
  <body>

<?php
require_once "../conexion.php";
$id=$_GET['id'];

$conexion=conexion();
$sql="DELETE FROM persona WHERE ID_Persona=".$id;
if (mysqli_query($conexion,$sql)==1){

  mysqli_close($conexion);

  echo "<script type='text/javascript'> window.location = 'listar.php'; </script>";

}else{

  echo "<script type='text/javascript'>
    swal({
      text: 'Hubo un error al realizar la iperación',
      button: false
    });

    var myTimer = setTimeout(function () {
      window.location = 'listar.php';
      }, 2000);

  </script>";

}

?>
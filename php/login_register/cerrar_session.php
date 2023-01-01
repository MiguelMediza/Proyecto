<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../imagenes/logotipo.png">
    <title>HelpQR</title>
</head>
<body>

<?php

    echo "<script type='text/javascript'>
      swal({
        icon: 'success',
        text: 'Sesion cerrada correctamente',
        button: false
        
      });
      </script>";

      session_start();
      session_destroy();

       echo "<script type='text/javascript'>
      var myTimer = setTimeout(function () {
      window.location = '../../index.html';
      }, 2000);

      </script>";
      ?>
</body>
</html>

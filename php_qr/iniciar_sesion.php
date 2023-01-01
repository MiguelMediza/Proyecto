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
        echo "<script type='text/javascript'>
             swal({
               icon: 'error',
               text: 'Debes iniciar sesión para poder adquirir un plan',
               button: false
               
             });
       
             var myTimer = setTimeout(function () {
             window.location = '../index.html';
             }, 2000);
       
             </script>";

?>
</body>
</html>
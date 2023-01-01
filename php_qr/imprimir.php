<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos_imprimir.css">
    <link rel="stylesheet" href="../css/estilos_gestion_personas.css">
    <link rel="shortcut icon" href="../imagenes/logotipo.png">

    <title>HelpQR</title>
</head>
<body>
<div class="container logo-nav-container" title="regresar">
  <a  href="indexQR.php" class="logo"><img src="../imagenes/logo_HelpQR.png" alt="logo helpqr" width="120px"></a>
</div>
<?php
    $ID_QR=$_GET["ID_QR"];

    echo "<div id=\"impresion\">
    <h1 style=\"font-size: 15px; text-align: center; padding: 10px;\">Escanear en caso <br>de emergencia</h1>
    <img src='qr_generados/".$ID_QR."'>
   
    <style>
        body {
            text-align: center;
        }
    </style>

    </div>";


    ?>


    <br></br>
    <div class="btn">
        <div class="inner"></div>
            <button type="button" onclick="javascript:imprimir();">Imprimir</button>
        </div>


    <script>
    function imprimir(){
        
    var printContents = document.getElementById('impresion').innerHTML;
            w = window.open();
            w.document.write(printContents);
            w.document.close(); // necessary for IE >= 10
            w.focus(); // necessary for IE >= 10
            w.print();
            w.close();
            return true;}
    </script>
</body>
</html>

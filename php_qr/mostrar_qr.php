<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="style.css" rel="stylesheet" type="text/css">
    <title>HelpQR</title>
</head>
<body>
<?php //Abro el código php
$codeFile=$_GET["codeFile"];

echo '<img class="imagenqr" src="qr_generados/'.$codeFile.'" />';
?>
<a href="listar.php"> Volver</a>
</body>
</html>

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
$id=$_POST['id'];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$cedula=$_POST["cedula"];
$pais=$_POST["pais"];
$departamento=$_POST["departamento"];
$ciudad=$_POST["ciudad"];
$calle=$_POST["calle"];
$patologia=$_POST["patologia"];
$medicacion=$_POST["medicacion"];
$numero_contacto=$_POST["numero_contacto"];
$auxilio=$_POST["auxilio"];

$ID_Usuario=$_SESSION['id_usuario'];


$conexion=conexion();

if(isset($_POST) && !empty($_POST)) { //verificamos que se haya enviado la petición mediante POST y lo que recibamos no esté vacío.
    include('libreria/qrlib.php'); //Incluímos la libreria qrlib.php que est´dentro de la carpeta libreria.
    $datos= "Nombre: ".$nombre." "." Apellido: ".$apellido." "."Cédula: ".$cedula ." "."País: ".$pais." "."Departamento: ".$departamento." "."Patología: ".$patologia." "."Medicación: ".$medicacion." "."Número de contacto: ".$numero_contacto." "."Primeros auxilios: ".$auxilio ;
    $codesDir = "qr_generados/"; //Asignamos a una variable la ruta donde se almacenaran los QR generados.
    $codeFile =   $nombre."".$apellido."".date('d-m-Y-H-i-s').'.png'; //Le asignamos un nombre al QR generado y una extensión.
    QRcode::png($datos, $codesDir.$codeFile, $_POST['nivel'], $_POST['tamaño']); //Generamos el QR, esta es una función que está incluida en al librería.

   //creo una variable de conexión, estolo utilizamos para conectarnos a la BBDD.
   $conexion=conexion();
  
    }
      if($id !=0){ // Comparamos las contraseñas


        //creo una variable de conexión, estolo utilizamos para conectarnos a la BBDD.
        $conexion=conexion();
     
       //Escribo mi sentencia SQL
       $sql="UPDATE persona SET Nombre='$nombre',Apellido='$apellido',CI='$cedula',Pais='$pais',Departamento='$departamento',Ciudad='$ciudad',Calle='$calle',Nro_Contacto='$numero_contacto',ID_QR='$codeFile' WHERE ID_Persona=$id;";
     
         if(mysqli_query($conexion,$sql)){

         
         //Ejecuto la sentencia, en está función debo tener como parametros la sentencia sql y la variable que abre la conexión;
         echo "<script type='text/javascript'>
         swal({
           icon: 'success',
           text: 'Persona modificada correctamente',
           button: false
         });
     
       var myTimer = setTimeout(function () {
         window.location = 'listar.php';
       }, 2000);
     
       </script>";
      }
         mysqli_close($conexion);

}
 ?>
</body>
</html>

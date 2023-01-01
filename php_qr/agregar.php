<!DOCTYPE html>
<html lang="es_ES" dir="ltr">
  <head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta charset="utf-8">
      <link rel="shortcut icon" href="../imagenes/logotipo.png">
    <title></title>
  </head>
  <body>

<?php //Abro el código php
require_once "../conexion.php";

session_start();
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


$ID_Serv_Salud=$_POST['ServSalud'];
$ID_Usuario=$_SESSION['id_usuario'];
$cant_maxima=$_SESSION['cant_maxima'];

$conexion=conexion();
$verificar_cedula = mysqli_query($conexion, "SELECT * FROM persona WHERE CI='$cedula' ");

$num_personas = mysqli_query($conexion, "SELECT * FROM persona WHERE ID_Usuario=".$ID_Usuario.";");
$fila = mysqli_num_rows($num_personas);

if($cant_maxima==null){
  echo
  "<script type='text/javascript'>
    swal({
      icon: 'error',
      text: 'Asegurate de adquirir un plan antes de comenzar',
      button: false
      
    });

    var myTimer = setTimeout(function () {
    window.location = '../bienvenida.php';
    }, 2000);
  </script>";
}
if ($fila < $cant_maxima){
  //Verificar que la cedula no se repita en la base de datos
  if (mysqli_num_rows($verificar_cedula) > 0){

    echo "<script type='text/javascript'>
      swal({
        icon: 'error',
        text: 'La cedula introducida ya fue agregada',
        button: false
      });

    var myTimer = setTimeout(function () {
      window.location = 'gestion_personas.php';
    }, 2000);

    </script>";

    exit();

  }


if(isset($_POST) && !empty($_POST)) { //verificamos que se haya enviado la petición mediante POST y lo que recibamos no   esté vacío.
    include('libreria/qrlib.php'); //Incluímos la libreria qrlib.php que est´dentro de la carpeta libreria.
    $datos= "Nombre: ".$nombre." "." Apellido: ".$apellido." "."Cédula: ".$cedula ." "."País: ".$pais." "."Departamento: ".$departamento." "."Patología: ".$patologia." "."Medicación: ".$medicacion." "."Número de contacto: ".$numero_contacto." "."Primeros auxilios: ".$auxilio ;
    $codesDir = "qr_generados/"; //Asignamos a una variable la ruta donde se almacenaran los QR generados.
    $codeFile =   $nombre."".$apellido."".date('d-m-Y-H-i-s').'.png'; //Le asignamos un nombre al QR generado y una extensión.
    QRcode::png($datos, $codesDir.$codeFile,$_POST['nivel'],$_POST['tamaño']); //Generamos el QR, esta es una función que está incluida en al librería.

   //creo una variable de conexión, estolo utilizamos para conectarnos a la BBDD.
   $conexion=conexion();

  //Escribo mi sentencia SQL
  $sql="INSERT into persona (Nombre,Apellido,CI,Pais,Departamento,Ciudad,Calle,Nro_Contacto,Patologia,Medicacion,Auxilio,ID_Usuario,ID_Serv_Salud,ID_QR) values ('$nombre','$apellido', '$cedula', '$pais','$departamento','$ciudad','$calle','$numero_contacto','$patologia','$medicacion','$auxilio','$ID_Usuario','$ID_Serv_Salud','$codeFile')";

    if (mysqli_query($conexion,$sql)){

    echo
     "<script type='text/javascript'>
      swal({
        icon: 'success',
        text: 'Persona agregada',
        button: false
        
      });

      var myTimer = setTimeout(function () {
      window.location = 'listar.php';
      }, 2000);

      </script>";
    }


    /*Ejecuto la sentencia, en está función debo tener como parametros la sentencia sql y la variable que abre la conexión;*/
    mysqli_close($conexion);


  } else {
    echo "Error! intentelo nuevamente";
    echo "<a href='gestion_personas.php'>Volver</a>";
  }


  }//Fin if de comprobar cantidad de personas
else{
  echo
  "<script type='text/javascript'>
    swal({
      icon: 'error',
      text: 'Limite de personas agregadas, si desea continuar agregando personas deberás mejorar tú membresía',
      button: false
      
    });

    var myTimer = setTimeout(function () {
    window.location = '../bienvenida.php';
    }, 2000);
  </script>";


}
 ?>

</body>
</html>


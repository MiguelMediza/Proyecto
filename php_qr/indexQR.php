<?php
    session_start();
    //Si no existe la variable de sesion "usuario" hacer lo siguiente:
    if(!isset($_SESSION['usuario'])){

        echo  "<script> alert ('Por favor debes iniciar sesion'); </script>";
        echo "<p> window.location='index.html'; </script>";
        session_destroy(); //Destruyo cualquier variable
        die(); //Paro el codigo

    }
?>


<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Pagina responsiva-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
    <html lang="es-ES">
    <link REL=StyleSheet TYPE="text/css" HREF="../css/estilos_bienvenida.css">
    <link REL=StyleSheet TYPE="text/css" HREF="../css/estilos_informes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="shortcut icon" href="../imagenes/logotipo.png">

    <title> HelpQR </title>

</head>


<body>

    <header class="header">

        <div class="container logo-nav-container">

            <a href="../bienvenida.php" class="logo"> <img src="../imagenes/logo_HelpQR.png" alt="" width="120px"></a>
            <span class="menu-icon"> <img class="icon" src="../imagenes/icon.png"> </span>
            <nav class="navigation">

                <ul class="menu">

                    <li><a href="../bienvenida.php"><span><i class="fas fa-home"></i></span> Inicio </a></li>
                    <li><a href="gestion_personas.php"><span><i class="fas fa-user-plus"></i></span> Agregar Persona </a></li>
                    <li><a href="listar.php"><span><i class="fas fa-list-alt"></i></span> Listado de personas </a></li>
                    <li><a href="#informes"><span><i class="far fa-list-alt"></i></span> Informes</a>
                    <li><a class="actual" href="indexQR.php"><span><i class="fas fa-qrcode"></i></span> Personas</a></li>
                    <li><a href="#"><span><i class="fas fa-user"></i></span> Perfil </a>
                        <ul class="submenu">
                            <li><a href="../php_usuarios/form_editar.php"><span><i class="fas fa-user-edit"></i></span> Editar perfil</a></li>
                            <li><a href="../php/login_register/cerrar_session.php"><span><i class="fas fa-times-circle"></i></span> Cerrar sesión</a></li>
                        </ul>
                </ul>

            </nav>

        </div>

    </header>


    <section class="main">
        <h1 class="titulo">Gestión de personas agregadas y QR generados</h1>
        <figure class="Imagen1">
            <a href="gestion_personas.php"> <img class="imagen" src="../imagenes/agregar_persona.png" title="Agregar Persona" alt="" width="300px"></a>
        </figure>

        <figure class="Imagen2">
            <a href="listar.php"> <img class="imagen" src="../imagenes/listar_personas.png" title="Listar Personas" alt="" width="300px"></a>
        </figure>

    </section>

    <?php
    require_once "../conexion.php";
    $conexion=conexion();
    $ID_Usuario=$_SESSION['id_usuario'];
    $cant_maxima=$_SESSION['cant_maxima'];
        $num_personas = mysqli_query($conexion, "SELECT * FROM persona WHERE ID_Usuario=".$ID_Usuario.";");
        $total_personas = mysqli_query($conexion, "SELECT Cantidad_Maxima FROM usuario WHERE ID_Usuario=".$ID_Usuario.";");
        $fila = mysqli_num_rows($num_personas);

    ?>
    
    <div class="number-father">
        <h1 class="estadisticas">Informes</h1>
        <div class="tarjetas">
          <div class="container-num">
          <i class="fa-solid fa-user count"></i>
            <span class="num" data-val="<?php echo $fila ?>">000</span>
            <span class="text">Personas agregadas</span>
          </div> 
          <div class="container-num">
          <i class="fa-solid fa-users count"></i>
            <span class="num" data-val="<?php echo $cant_maxima ?>">000</span>
            <span class="text">Total personas</span>
          </div>
          <div class="container-num">
          <i class="fa-solid fa-qrcode count"></i>
            <span class="num" data-val="225">000</span>
            <span class="text">QR escaneados</span>
          </div>
          <div class="container-num">
            <i class="fas fa-star count"></i>
            <span class="num" data-val="280">000</span>
            <span class="text">Five Stars</span>
          </div>
        </div>
    </div>

    <footer class="footer" id="footer">

        <div class="columna1">
            <div class="redes-container">
                <ul>
                    <li><a href="https://www.facebook.com/profile.php?id=100073719494201" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://instagram.com/help_qr?utm_medium=copy_link" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/Help_QR?t=kMHw6EYeCNTN8VxHmpc6-g&s=08" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="columna2">
            Dirección: Gral. Rivera 2970, esquina Pastoriza | Montevideo - Uruguay
            Teléfono: (0598) 2707 4677 <br>
            Por contratación: L a d de 9:30 a 19:30 hs<br>
            Email: lineaayuda@gmail.com <br> <br>
            <h8>© 2021 Todos los derechos reservados.
                Diseñado por UrHouseSoftware</h8>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>
    <script src="../js/scripts.js"></script>
    <script src="../js/informes.js"></script>
    <script src="https://kit.fontawesome.com/0e1554a48e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>


</body>



</html>
<?php
    session_start();
    //Si no existe la variable de sesion "usuario" hacer lo siguiente:
    if(!isset($_SESSION['usuario'])){
        session_destroy();
        echo  "<script> alert ('Por favor debes iniciar sesion'); </script>";
        echo "<script> window.location='index.html'; </script>";
    //Destruyo cualquier variable
        die(); //Paro el codigo

    }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Pagina responsiva-->
    <html lang="es-ES">
    <link rel=StyleSheet type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="css/loaderStyle.css">
    <link rel=StyleSheet type="text/css" href="css/estilos_preguntas.css">
    <link rel=StyleSheet type="text/css" href="css/estilos_bienvenida.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="fancy/jquery.fancybox.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="imagenes/logotipo.png">
    <title> HelpQR </title>

</head>


<body>
    <div class="contenedor_loader">
        <div class="loader"></div>
    </div>

    <header class="header">

        <div class="container logo-nav-container">

            <a href="bienvenida.php" class="logo"> <img src="imagenes/logo_HelpQR.png" alt="" width="120px"></a>
            <span class="menu-icon"> <img class="icon" src="imagenes/icon.png"> </span>
            <nav class="navigation">

                <ul class="menu">

                    <li><a href="#planes"><span><i class="fas fa-shopping-cart"></i></span> Planes </a></li>
                    <li><a href="#SobreNosotros"><span><i class="fas fa-address-card"></i></span> Sobre Nosotros </a>
                    </li>
                    <li><a href="#Preguntas"><span><i class="fas fa-question-circle"></i></span> Preguntas Frecuentes
                        </a></li>
                    <li><a href="#contacto"><span><i class="fas fa-phone-square-alt"></i></span> Contacto </a></li>
                    <li><a href="php_qr/indexQR.php"><span><i class="fas fa-qrcode"></i></span> Personas</a></li>
                    <li><a href="#"><span><i class="fas fa-user"></i></span> Perfil </a>
                        <ul class="submenu">
                            <li><a href="php_usuarios/form_editar.php"><span><i class="fas fa-user-edit"></i></span>
                                    Editar perfil</a></li>
                            
                            <li><a href="php/login_register/cerrar_session.php"><span><i class="fas fa-times-circle"></i></span> Cerrar sesión</a></li>
                        </ul>
                </ul>

            </nav>

        </div>
    </header>
    <div class="Usuario">
        <h1 class="Usuario nombre">¡Bienvenido de nuevo <?php  echo $_SESSION['nombre'];?>!</h1>
    </div>

    <div class="sliders">
        <div class="img-slider">
            <div class="slide active">
              <img src="imagenes/slider.png" alt="">
              <div class="info">
                    <h2></h2>
                        <p id="slider1">No solo es un código QR es tu guardián en todo momento. <br>
                            <strong>No salgas sin él.</strong>
                        </p>
              </div>
            </div>
            <div class="slide">
              <img src="imagenes/slider2.png" alt="">
              <div class="info">
                    <h2></h2>
                    <p id="slider2">Diferentes planes para que encuentres el más adecuado.</p>     
              </div>
            </div>
            <div class="slide">
              <img src="imagenes/slider_repuesto.jpg" alt="">
              <div class="info">
                <h2>Ofertas de tiempo limitado</h2>
                    <p id="slider3">Por el mes de diciembre un 20% de descuento en plan Premium y un 35% en plan Premium Gold. No te lo pierdas.
                    </p>
                    
              </div>
            </div>
            
            <div class="navigationbtn">
              <div class="btn active"></div>
              <div class="btn"></div>
              <div class="btn"></div>
            </div>
          </div>
    </div>

    </div>


    <h1 id="planes para" class="planes">Planes disponibles</h1>

    <aside>

        <div class="cards">
            <div class="card">
                <div class="title">
                    <img src="imagenes/logo_HelpQR.png" alt="" >
                    <h2>Free</h2>
                </div>
                <div class="price">
                    <h4><sup> US$</sup>0</h4>
                </div>
                <div class="option">
                    <ul>
                        <li><i class="fas fa-check"></i> Acceso a registrar 2 personas</li>
                        <li><i class="fas fa-check"></i> Acceso a código QR en diferentes tamaños</li>
                    </ul>
                </div>
                <br>

                <a class="btn free" href="">Adquirir</a>
            </div>



            <div class="card">
                <div class="title">
                    <img src="imagenes/logo_HelpQR.png" alt="" >
                    <h2>Premium</h2>
                </div>
                <div class="price">
                    <h5><del>Antes</del><sup> US$</sup><del>15</del></h5>
                    <h4>Ahora<sup> US$</sup>10</h4>
                </div>
                <div class="option">
                    <ul>
                        <li><i class="fas fa-check"></i> Acceso a registrar 10 personas</li>
                        <li><i class="fas fa-check"></i> Acceso a código QR en diferentes tamaños</li>
                    </ul>
                </div>
                <a class="btn premium" href="php_qr/pago_premium.php">Comprar</a>
            </div>



            <div class="card">
                <div class="title">
                    <img src="imagenes/logo_HelpQR.png" alt="" >
                    <h2 id="premium_gold">Premium Gold</h2>
                </div>
                <div class="price">
                    <h5><del>Antes</del><sup> US$</sup><del>28</del></h5>
                    <h4>Ahora<sup> US$</sup>20</h4>

                </div>
                <div class="option">
                    <ul>
                        <li><i class="fas fa-check"></i> Acceso a registrar 30 personas</li>
                        <li><i class="fas fa-check"></i> Acceso a código QR en diferentes tamaños</li>
                    </ul>
                </div>
                <a class="btn premium_gold" href="php_qr/pago_premium_gold.php">Comprar</a>
            </div>
        </div>

    </aside>

    <section id="SobreNosotros">
        <h1 class="nosotros">Sobre Nosotros</h1>

        <h2 class="subtitulos">¿Quiénes somos?</h2>

        <p class="parrafos">Somos un servicio dedicado al área de la asistencia médica, inaugurado en el año 2021 bajo el
            nombre HelpQR.
        </p>

        <h2 class="subtitulos">¿Cuál es nuestro objetivo?</h2>

        <p class="parrafos">El servicio tiene como fin facilitar la pronta asistencia médica de las personas
            que se encuentren incapacitadas en el momento, y no puedan valerse por sí mismas.
        </p>


        <h2 class="subtitulos">¿Cómo funciona el servicio?</h2>

        <p class="parrafos">Nuestros clientes podrán agendar a las personas que estén bajo su
            cuidado, aportando la información básica de esta (C.I, Nombre, Apellido, lugar en el que reside, etc.), e
            información médica (patología que padece y cómo tratarla, medicación que toma) al ser agendadas, se
            les asignará un QR el cual deberá escanearse en caso de que la persona se encuentre incapacitada, esto
            facilitará el tratamiento y prevendrá un riesgo mayor.
        </p>



    </section>

    <!--Boton de ir hacia arriba-->
    <div id="button-up">
        <i class="fas fa-chevron-up"></i>
    </div>

    <div class="main" id="Preguntas">
        <h1 class="titulos"><strong>Preguntas Frecuentes</strong></h1>
        <div class="categorias" id="categorias">
            <div class="categoria activa" data-categoria="metodos-pago">
                <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path
                        d="M21.19 7h2.81v15h-21v-5h-2.81v-15h21v5zm1.81 1h-19v13h19v-13zm-9.5 1c3.036 0 5.5 2.464 5.5 5.5s-2.464 5.5-5.5 5.5-5.5-2.464-5.5-5.5 2.464-5.5 5.5-5.5zm0 1c2.484 0 4.5 2.016 4.5 4.5s-2.016 4.5-4.5 4.5-4.5-2.016-4.5-4.5 2.016-4.5 4.5-4.5zm.5 8h-1v-.804c-.767-.16-1.478-.689-1.478-1.704h1.022c0 .591.326.886.978.886.817 0 1.327-.915-.167-1.439-.768-.27-1.68-.676-1.68-1.693 0-.796.573-1.297 1.325-1.448v-.798h1v.806c.704.161 1.313.673 1.313 1.598h-1.018c0-.788-.727-.776-.815-.776-.55 0-.787.291-.787.622 0 .247.134.497.957.768 1.056.344 1.663.845 1.663 1.746 0 .651-.376 1.288-1.313 1.448v.788zm6.19-11v-4h-19v13h1.81v-9h17.19z" />
                </svg>
                <p>Métodos de pago</p>
            </div>
            <div class="categoria" data-categoria="asistencia">
                <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path
                        d="M7 24h-5v-9h5v1.735c.638-.198 1.322-.495 1.765-.689.642-.28 1.259-.417 1.887-.417 1.214 0 2.205.499 4.303 1.205.64.214 1.076.716 1.175 1.306 1.124-.863 2.92-2.257 2.937-2.27.357-.284.773-.434 1.2-.434.952 0 1.751.763 1.751 1.708 0 .49-.219.977-.627 1.356-1.378 1.28-2.445 2.233-3.387 3.074-.56.501-1.066.952-1.548 1.393-.749.687-1.518 1.006-2.421 1.006-.405 0-.832-.065-1.308-.2-2.773-.783-4.484-1.036-5.727-1.105v1.332zm-1-8h-3v7h3v-7zm1 5.664c2.092.118 4.405.696 5.999 1.147.817.231 1.761.354 2.782-.581 1.279-1.172 2.722-2.413 4.929-4.463.824-.765-.178-1.783-1.022-1.113 0 0-2.961 2.299-3.689 2.843-.379.285-.695.519-1.148.519-.107 0-.223-.013-.349-.042-.655-.151-1.883-.425-2.755-.701-.575-.183-.371-.993.268-.858.447.093 1.594.35 2.201.52 1.017.281 1.276-.867.422-1.152-.562-.19-.537-.198-1.889-.665-1.301-.451-2.214-.753-3.585-.156-.639.278-1.432.616-2.164.814v3.888zm3.79-19.913l3.21-1.751 7 3.86v7.677l-7 3.735-7-3.735v-7.719l3.784-2.064.002-.005.004.002zm2.71 6.015l-5.5-2.864v6.035l5.5 2.935v-6.106zm1 .001v6.105l5.5-2.935v-6l-5.5 2.83zm1.77-2.035l-5.47-2.848-2.202 1.202 5.404 2.813 2.268-1.167zm-4.412-3.425l5.501 2.864 2.042-1.051-5.404-2.979-2.139 1.166z" />
                </svg>
                <p>Asistencia</p>
            </div>
            <div class="categoria" data-categoria="seguridad">
                <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path
                        d="M12 0c-3.371 2.866-5.484 3-9 3v11.535c0 4.603 3.203 5.804 9 9.465 5.797-3.661 9-4.862 9-9.465v-11.535c-3.516 0-5.629-.134-9-3zm0 1.292c2.942 2.31 5.12 2.655 8 2.701v10.542c0 3.891-2.638 4.943-8 8.284-5.375-3.35-8-4.414-8-8.284v-10.542c2.88-.046 5.058-.391 8-2.701zm5 7.739l-5.992 6.623-3.672-3.931.701-.683 3.008 3.184 5.227-5.878.728.685z" />
                </svg>
                <p>Seguridad</p>
            </div>
            <div class="categoria" data-categoria="cuenta">
                <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path
                        d="M9.484 15.696l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm10.516 11.304h-8v1h8v-1zm0-5h-8v1h8v-1zm0-5h-8v1h8v-1zm4-5h-24v20h24v-20zm-1 19h-22v-18h22v18z" />
                </svg>
                <p>Cuenta</p>
            </div>
        </div>

        <div class="preguntas">

            <!-- Preguntas Metodos de pago -->
            <div class="contenedor-preguntas activo" data-categoria="metodos-pago">
                <div class="contenedor-pregunta">
                    <p class="pregunta">¿Qué métodos de pago disponibles tienen? <img src="imagenes/suma.svg"
                            alt="Abrir Respuesta" /></p>
                    <p class="respuesta">Se aceptan los siguientes métodos de pago:<br>
                        <i class="fab fa-cc-mastercard"></i><i class="fab fa-cc-visa"></i> <br>
                        Visa: 5% recargo <br>
                        MasterCard: Sin recargo
                    </p>
                </div>
                <div class="contenedor-pregunta">
                    <p class="pregunta">¿Tienen plazo de pago? <img src="imagenes/suma.svg" alt="Abrir Respuesta" /></p>
                    <p class="respuesta">Se podrá abonar hasta con 6 meses de retraso, posterior a la fecha límite se
                        revocarán los beneficios del plan.</p>
                </div>
                <div class="contenedor-pregunta">
                    <p class="pregunta">Suscripción <img src="imagenes/suma.svg" alt="Abrir Respuesta" /></p>
                    <p class="respuesta">Se deberá abonar mensualmente de acuerdo al plan adquirido.</p>
                </div>
            </div>

            <!-- Preguntas asistencia -->
            <div class="contenedor-preguntas" data-categoria="asistencia">
                <div class="contenedor-pregunta">
                    <p class="pregunta">¿Si ocurre un error, qué debo hacer? <img src="imagenes/suma.svg"
                            alt="Abrir Respuesta" /></p>
                    <p class="respuesta">Frente a un error usted podrá comunicarse con el servicio de atención al
                        cliente
                        via gmail helpqrAC@gmail.com o al teléfono fijo 45864677 .</p>

                </div>
            </div>

            <!-- Preguntas Seguridad -->
            <div class="contenedor-preguntas" data-categoria="seguridad">
                <div class="contenedor-pregunta">
                    <p class="pregunta">¿Qué pasa con mis datos personales? <img src="imagenes/suma.svg"
                            alt="Abrir Respuesta" /></p>
                    <p class="respuesta">Datos delicados como la contraseña de su cuenta estará encriptada impidiendo tener acceso a su cuenta.<br>
                        Por favor no debe entregar su contraseña a nadie, es de uso personal. 
                    </p>
                </div>
            </div>

            <!-- Preguntas Cuenta -->
            <div class="contenedor-preguntas" data-categoria="cuenta">
                <div class="contenedor-pregunta">
                    <p class="pregunta">¿Puedo cambiar mis datos una vez registrado? <img src="imagenes/suma.svg"
                            alt="Abrir Respuesta" /></p>
                    <p class="respuesta">Sí se puede, una vez logueado puedes dirigirte a la opción de <strong>Perfil</strong> ubicada en el menú y luego en <strong>Editar Perfil</strong>.</p>
                </div>
            </div>




        </div>
    </div>


    <section class="contactanos" id="contacto">
        <h1 class="contacto">Contáctanos</h1>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3290.675669850295!2d-57.440113149629916!3d-34.43499255600045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a3bae99480ca6d%3A0x38f737f1042c409!2s306%2C%20Jose%20Enrique%20Rodo%20220%2C%2070500%20Juan%20L.%20Lacaze%2C%20Departamento%20de%20Colonia!5e0!3m2!1ses-419!2suy!4v1630954010868!5m2!1ses-419!2suy"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <iframe src="" frameborder="0"></iframe>

    </section>

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
    <script>    if($_SESSION['Tipo']=="Premium Gold"){
        document.getElementById("premium_gold").innerHTML = "Adquirido";
    }</script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>
    <script src="js/scripts.js"> </script>
    <script src="js/gotop.js"> </script>
    <script src="js/categorias.js"></script>
    <script src="js/preguntasFrecuentes.js"></script>
    <script src="js/loader.js"></script>
    <script src="js/sliders.js"></script>
    <script src="js/planes.js"></script>
    <script>
       let btnTranslate = document.querySelector("#btnTranslate");
       let idiomas = document.querySelector(".idiomas");

       btnTranslate.onclick = function() {
           idiomas.classList.toggle("active");
       }
    </script>
</body>



</html>
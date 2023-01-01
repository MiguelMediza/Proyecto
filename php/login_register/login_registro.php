<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Pagina responsiva-->
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css"> <!-- link con el archivo de estilos-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="../../imagenes/logotipo.png">
    <title>HelpQR - Sesión</title>
    <!-- Fancybox -->
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    $("#open_conditions").fancybox();
    });
    </script>
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script> <!-- Captcha automatico de Google-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> <!-- Familia de letra-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <!-- Boostrap usado para aviso de realizar captcha-->
    <script src="https://kit.fontawesome.com/5e06ba91da.js" crossorigin="anonymous"></script><!--Kit figuras logos-->

    
    <link rel="stylesheet" href="../../css/estilos_login.css">
</head>

<body>

<div class="container logo-nav-container" title="regresar">
  <a  href="../../index.html" class="logo"><img src="../../imagenes/logo_HelpQR.png" alt="logo helpqr" width="120px"></a>
</div>
    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="login_usuario.php" class="formulario__login" method="post">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="email" required>
                    <input type="password" placeholder="Contraseña" name="pass" required>
                    <br>
                    <br>
                    <div class="g-recaptcha" data-sitekey="6LcPLRccAAAAADmgtTUsJ6kEV86vZVxGebU6KbBq"></div>
                    <br>
                    <button type="submit">Entrar</button>
                </form>


                <!--Register-->
                <form action="registro_usuario.php" class="formulario__register" id="formulario" method="post">
                    <h2>Regístrarse</h2>
                    <input type="text" id="name" name="name" placeholder="Nombre" required onkeypress="return SoloLetras(event)">
                    <input type="text" id="apellido" name="apellido" placeholder="Apellido" required onkeypress="return SoloLetras(event)">
                    <input type="text" id="user" name="user" placeholder="Usuario" required onkeypress="return CharEspeciales(event)">
                    <input type="text" id="email" name="email" placeholder="Correo Electrónico" required>
                    <input type="text" id="cedula" name="cedula" placeholder="Cédula" required onkeypress="return SoloNumeros(event)" maxlength="8">
                    <!--Select con los paises disponibles-->
                    <select name="pais" id="pais" required>
                        <option value="" selected disabled>País</option>
                        <option value="Uruguay">Uruguay</option>
                    </select>
                    <!--Select con todos los departamentos del país-->
                    <select id="departamento" name="departamento" required> 
                        <option value="" selected disabled>Departamento</option>
                        <option value="Montevideo">Montevideo</option>
                        <option value="Artigas">Artigas</option>
                        <option value="Canelones">Canelones</option>
                        <option value="Cerro Largo">Cerro Largo</option>
                        <option value="Colonia">Colonia</option>
                        <option value="Durazno">Durazno</option>
                        <option value="Flores">Flores</option>
                        <option value="Florida">Florida</option>
                        <option value="Lavalleja">Lavalleja</option>
                        <option value="Maldonado">Maldonado</option>
                        <option value="Paysandu">Paysandú</option>
                        <option value="Rio Negro">Río Negro</option>
                        <option value="Rivera">Rivera</option>
                        <option value="Rocha">Rocha</option>
                        <option value="Salto">Salto</option>
                        <option value="San Jose">San José</option>
                        <option value="Soriano">Soriano</option>
                        <option value="Tacuarembo">Tacuarembó</option>
                        <option value="Treinta y Tres">Treinta y Tres</option>
                    </select>
                    <input type="text" id="ciudad" name="ciudad" placeholder="Ciudad" required onkeypress="return SoloLetras(event)">
                    <input type="password" id="pass" name="pass" placeholder="Contraseña" required minlength="6">
                    <input type="password" id="pass2" name="pass2" placeholder="Repetir contraseña" required minlength="6">
                    <!--<button class="mostrar_pass" type="button" onclick="mostrarContrasena()">Ver Contraseña</button>-->
                    <br>
                    <br>
                
                        <div id="includedContent"></div>
             
                    <button type="submit">Regístrarse</button>
                </form>
            </div>
        </div>

    </main>

    <script src="../../js/script_login.js"></script>
    <script src="../../js/validation.js"></script>
    <script src="../../js/validar_caracteres.js"></script>
</body>
</html>

<script> //Código Java Script para un boton de mostrar contraseña
    function mostrarContrasena(){
  
        if(document.getElementById("pass").type == "password"){
            document.getElementById("pass").type = "text";
            document.getElementById("pass2").type = "text";
        }else{
          document.getElementById("pass").type = "password";
          document.getElementById("pass2").type = "password";
        }
    }

    $(function(){
      $("#includedContent").load("modal.html"); 
    });
 
  </script>
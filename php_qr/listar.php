<?php

require_once "../conexion.php";
session_start();

$conexion=conexion();

$ID_Usuario=$_SESSION['id_usuario'];

$sql="SELECT * FROM persona WHERE ID_Usuario=".$ID_Usuario;

$result=mysqli_query($conexion,$sql);

?>

               
<!doctype html>
<html lang="en">
  <head>

  <link rel="stylesheet" href="../css/estilos_listar.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <link REL=StyleSheet HREF="../css/estilos_bienvenida.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fancy/jquery.fancybox.min.css">
    <!--    Datatables  -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
    <style>
        table.dataTable thead {
            background: linear-gradient(to right, #0575E6, #00F260);
            color:white;
        }
    </style> 
    <link rel="shortcut icon" href="../imagenes/logotipo.png">

    <title>HelpQR - Listado de personas</title>
  </head>

  <header class="header">

<div class="container logo-nav-container">
    <a href="../bienvenida.php" class="logo"> <img src="../imagenes/logo_HelpQR.png" alt="" width="120px"></a>
    <span class="menu-icon"> <img class="icon" src="../imagenes/icon.png"> </span>
    <nav class="navigation">

        <ul class="menu">

            <li><a href="../bienvenida.php"><span><i class="fas fa-home"></i></span> Inicio </a></li>
            <li><a href="gestion_personas.php"><span><i class="fas fa-user-plus"></i></span> Agregar Persona </a></li>
            <li><a class="actual" href="listar.php"><span><i class="fas fa-list-alt"></i></span> Listado de personas </a></li>
            <li><a href="#"><span><i class="far fa-list-alt"></i></span> Informes</a>
            <li><a href="#"><span><i class="fas fa-user"></i></span> Perfil </a>
                <ul class="submenu">
                    <li><a href="../php_usuarios/form_editar.php"><span><i class="fas fa-user-edit"></i></span> Editar perfil</a></li>
                    <li><a href="../php/login_register/cerrar_session.php"><span><i class="fas fa-times-circle"></i></span> Cerrar sesión</a></li>
                </ul>
        </ul>

    </nav>

</div>

</header>
  <body id="body">

   <div>
       <div>
           <div class="col-lg-12">
             
           <table id="tablaUsuarios" class="table" style="width:100%">
                    <thead class="thead-dark">
                        <th id="Titulos1">QR</th>
                        <th id="Titulos1">NOMBRE</th>
                        <th id="Titulos1">APELLIDO</th>
                        <th id="Titulos1">CÉDULA</th>
                        <th id="Titulos1">PAÍS</th>
                        <th id="Titulos1">DEPARTAMENTO</th>
                        <th id="Titulos1">CIUDAD</th>
                        <th id="Titulos1">CALLE</th>
                        <th id="Titulos1">ACCIONES</th>
                    </thead>

                <tbody>
                    <?php

                    while ($fila=mysqli_fetch_array($result)){

                    ?>
                     
                        <tr> 
                            <td><img width="100px" class="imagenqr" src="qr_generados/<?php echo $fila['ID_QR']; ?>"></td>
                            <td><?php echo  $fila['Nombre']; ?></td>
                            <td><?php echo  $fila['Apellido']; ?></td>
                            <td><?php echo  $fila['CI']; ?></td>
                            <td><?php echo  $fila['Pais']; ?></td>
                            <td><?php echo  $fila['Departamento']; ?></td>
                            <td><?php echo  $fila['Ciudad']; ?></td>
                            <td><?php echo  $fila['Calle']; ?></td>
                            <td>
                              <? echo $codefile; ?>
                                <a title="Eliminar" id="Titulos2" href="eliminar.php?id=<?php echo  $fila['ID_Persona']; ?>" ><i class="fas fa-trash"></i></a>
                                <a title="Ver QR"  id="Titulos2" href="qr_generados/<?php echo $fila['ID_QR']; ?>" data-fancybox="gallery" data-caption="<?php echo  $fila['Nombre']." ".$fila['Apellido']; ?>" ><i class="fas fa-eye"></i></a>
                                <a title="Modificar" id="Titulos2" href="gestion_personas.php?id=<?php echo  $fila['ID_Persona']; ?>"><i class="fas fa-edit"></i></a> 
                                <a target="_blank" href="imprimir.php?ID_QR=<?php echo  $fila['ID_QR']; ?>"><i class="fas fa-print"></i></a>
                            </td>
                        </tr>
                     <?php
                     }   //cierro el while
                     ?>
                </tbody>
                </table>
                
           </div>
       </div> 
    </div>

                
    <a class="volver" href="indexQR.php"><span><i class="fas fa-undo"></i></span> Volver</a>

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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="fancy/jquery.fancybox.min.js"></script>
    <script src="../js/scripts.js"> </script>
<!--    Datatables (Muestra un buscador para la tabla y la posibilidad de ordenar por columna)-->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
      
      <script>
        $(document).ready(function(){
           $('#tablaUsuarios').DataTable(); 
        });
      </script>
      
    </body>
</html>

 

 


 

 

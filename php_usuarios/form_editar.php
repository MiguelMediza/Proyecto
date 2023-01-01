<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/estilos_editar_perfil.css" rel="stylesheet" >
  <!-- ANIMATE.CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <!-- BOX-ICON -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <!-- FONT -->
  <script src="https://kit.fontawesome.com/5e06ba91da.js" crossorigin="anonymous"></script><!--Kit figuras logos-->
  <link rel="shortcut icon" href="../imagenes/logotipo.png">
  <title>HelpQR - Mi perfil</title>
</head>
<body>
<?php
require_once "../conexion.php";
$conexion=conexion();
session_start();

$ID_Usuario=$_SESSION['id_usuario'];

$sql="SELECT * FROM usuario WHERE ID_Usuario=".$ID_Usuario.";";
$result=mysqli_query($conexion,$sql);
while ($fila=mysqli_fetch_array($result)){

?>
   <div class="container logo-nav-container" title="regresar">
          <a  href="../bienvenida.php" class="logo"><img src="../imagenes/logo_HelpQR.png" alt="logo helpqr" width="120px"></a>
      </div>
   <div class="perfilinfo perfil-usuario-footer">
       <h3 class="titulo"><?php echo $fila['Nombre']." ".$fila['Apellido']?></h3>
       <div class="data-u">
           <li><i class="icono fas fa-user-check"></i>Nombre de usuario:</li>
           <li><i class="icono fas fa-signature"></i>Nombre: </li>
           <li><i class="icono fas fa-signature"></i>Apellido: </li>
           <li><i class="icono fas fa-map-marker-alt"></i> País: </li>
           <li><i class="icono fas fa-map-marker-alt"></i> Departamento: </li>
           <li><i class="icono fas fa-map-marker-alt"></i> Ciudad: </li>
           <li><i class="icono fas fa-envelope-square"></i> Email: </li>
           <li><i class="icono fas fa-id-card"></i> Cédula: </li>
       </div>
      <div class="datosPHP">
           <?php echo $fila['Nombre_Usuario']?><br>
           <?php echo $fila['Nombre']?><br>
           <?php echo $fila['Apellido']?><br>
           <?php echo $fila['Pais']?><br>
           <?php echo $fila['Departamento']?><br>
           <?php echo $fila['Ciudad']?><br>
           <?php echo $fila['email']?><br>
           <?php echo $fila['CI']?>
     </div>
       <button id="btn" type="button" name="button">Editar Perfil</button>
       </div>
       <section class="perfil seccion-perfil-usuario">
         <form class="form-horizontal formEditar" method="post" id="codeForm" action="editar_usuario.php">
           <h2>Editar mi perfil</h2>
           <br>
            <div class="form-group">
              <?php echo '<input class="controls" name="nombre" type="text" required="required" placeholder="Nombre" onkeypress="return SoloLetras(event)" value='.$fila['Nombre']?>>
             <?php echo '<input class="controls"  name="apellido" type="text" required="required" placeholder="Apellido" onkeypress="return SoloLetras(event)" value='.$fila['Apellido']?>>
              <!--Select con los paises disponibles-->
              <?php echo '<select class="controls" name="pais" id="pais" required value='.$fila['Pais']?>>
                <option value="" selected disabled>País</option>
                <option value="Uruguay">Uruguay</option>
              </select>
              <!--Select con todos los departamentos del país-->
              <?php echo '<select class="controls" id="departamento" name="departamento" required value='.$fila['Departamento']?>>
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
            <input class="controls" name="ciudad" type="text" required="required" placeholder="Ciudad" onkeypress="return SoloLetras(event)" value='<?php echo $fila['Ciudad']; ?>'>
         <div class="col-12">
           <button class="btn btn-primary" type="submit">Editar</button>
         </div>
       </form>
           </section>
   </div>




  <?php
}


?>
<script>
  let btn = document.querySelector("#btn");
  let btnAvatar = document.querySelector("#btnAvatar");
  let perfil = document.querySelector(".perfil");
  let formAvatar = document.querySelector("#formAvatar");


  btn.onclick = function() {
    perfil.classList.toggle("active");
  }
  btnAvatar.onclick = function() {
    formAvatar.classList.toggle("active");
  }

</script>
</body>
</html>

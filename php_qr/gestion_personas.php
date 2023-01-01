<?php
require_once "../conexion.php";
?>
<html lang="es-ES">
	<head>
		<meta charset="utf-8">
        <link rel=StyleSheet type="text/css" href="../css/estilos_gestion_personas.css">
        <script src="../js/validar_caracteres.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
      <script src="https://kit.fontawesome.com/5e06ba91da.js" crossorigin="anonymous"></script><!--Kit figuras logos-->
      <link rel="shortcut icon" href="../imagenes/logotipo.png">

      <title>HelpQR - Gestión de personas</title>
	</head>
<body>
  <div class="container logo-nav-container" title="regresar">
  <a  href="indexQR.php" class="logo"><img src="../imagenes/logo_HelpQR.png" alt="logo helpqr" width="120px"></a>
</div>

<?php
if(isset($_GET['id'])){


$id=$_GET['id'];

$conexion=conexion();

$sql="SELECT * FROM persona WHERE ID_Persona=".$id.";";
$result=mysqli_query($conexion,$sql);
while ($fila=mysqli_fetch_array($result)){

  ?>
<section class="form-register">
<h2>Modificar persona</h2>
  <form class="form-horizontal" method="post" id="codeForm" action="modificar.php">
     <div class="form-group">
    <input class="controls"  name="id" type="number" required="required" readonly style="visibility:hidden" value='<?php echo $fila['ID_Persona']; ?>'>
     <label class="">Cédula : </label>
     <input class="controls"  name="cedula" type="text" required="required" readonly value='<?php echo $fila['CI']; ?>'>
     <label>La Cédula asignada a una persona no se permite modificar por seguridad del sistema, se recomienda eliminarla y volver a registrarla.</label>
     <br><br>
       <label class="">Nombre : </label>
       <input class="controls"  name="nombre" type="text" required="required" onkeypress="return SoloLetras(event)" value='<?php echo $fila['Nombre']; ?>'>
       <label class="">Apellido : </label>
       <input class="controls"  name="apellido" type="text" required="required" onkeypress="return SoloLetras(event)" value='<?php echo $fila['Apellido']; ?>'>
       <label class="control-label">Número de contacto : </label>
       <input class="controls"  name="numero_contacto" type="text" required="required" onkeypress="return SoloNumeros(event)" value='<?php echo $fila['Nro_Contacto']; ?>'>
       <label class="">País : </label> 
       <!--Select con los paises disponibles-->
        <select class="controls" name="pais" id="pais" required value='<?php echo $fila['Pais']; ?>'>
                <option value="" disabled>País</option>
                <option value="Uruguay">Uruguay</option>
              </select>
              <label class="">Departamento : </label>
              <!--Select con todos los departamentos del país-->
              <select class="controls" id="departamento" name="departamento" required value='<?php echo $fila['Departamento']; ?>'>
                        <option value="" disabled>Departamento</option>
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
        <label class="control-label">Ciudad : </label>
       <input class="controls"  name="ciudad" type="text" onkeypress="return SoloLetras(event)"  value='<?php echo $fila['Ciudad']; ?>'>
        <label class="control-label">Calle : </label>
       <input class="controls"  name="calle" type="text" onkeypress="return CharEspeciales(event)" value='<?php echo $fila['Calle']; ?>'>
         <label class="control-label">Patología : </label>
       <input class="controls"  name="patologia" type="text" value='<?php echo $fila['Patologia']; ?>'>
         <label class="control-label">Medicación prescrita : </label>
       <input class="controls"  name="medicacion" type="text" value='<?php echo $fila['Medicacion']; ?>'>
         <label class="control-label">Primeros auxilios : </label>
       <input class="controls"  name="auxilio" type="text" value='<?php echo $fila['Auxilio']; ?>'>  
     </div>
       <div class="form-group">
           <label class="control-label">Nivel del código (ECC) : </label>
           <select class="controls" name="nivel">
              <option value="H">H - Mejor</option>
              <option value="M">M</option>
              <option value="Q">Q</option>
              <option value="L">L - Peor</option>
           </select>
       </div>
       <div class="form-group">
          <label class="">Tamaño : </label>
          <input class="controls" type="number" min="1" max="10" step="1" class="form-control col-xs-10" name="tamaño" value="5">
       </div>
       <div class="form-group">
          <label class="control-label"></label>
          <input type="submit" name="submit" id="submit" class="btn btn-success" value="Modificar persona">
       </div>
  </form>
</section>
  <?php
}

} else{
  $conexion=conexion();
  $sql="SELECT * FROM servicio_salud;";

  $result=mysqli_query($conexion,$sql);
  ?>

<section class="form-register">
    <h2>Agregar persona</h2>
         <form class="form-horizontal" method="post" id="codeForm" action="agregar.php">
            <div class="form-group">
             <input class="controls"  name="nombre" type="text" required="required" placeholder="Nombre" onkeypress="return SoloLetras(event)">
             <input class="controls"  name="apellido" type="text" required="required" placeholder="Apellido" onkeypress="return SoloLetras(event)">
             <input class="controls"  name="cedula" type="text" required="required" placeholder="Cédula" onkeypress="return SoloNumeros(event)" maxlength="8">
             <input class="controls"  name="numero_contacto" type="text" required="required" placeholder="Número de contacto" onkeypress="return SoloNumeros(event)" maxlength="9"> 
              <!--Select con los paises disponibles-->
              <select class="controls" name="pais" id="pais" required>
                <option value="" selected disabled>País</option>
                <option value="Uruguay">Uruguay</option>
              </select>
              <!--Select con todos los departamentos del país-->
              <select class="controls" id="departamento" name="departamento" required> 
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
             <input class="controls"  name="ciudad" type="text" required="required" placeholder="Ciudad" onkeypress="return SoloLetras(event)">
             <input class="controls"  name="calle" type="text" required="required" placeholder="Calle" onkeypress="return CharEspeciales(event)">
             <input class="controls"  name="patologia" type="text"  placeholder="Patología (Opcional)">
             <input class="controls"  name="medicacion" type="text"  placeholder="Medicación prescripta (Opcional)">
             <input class="controls"  name="auxilio" type="text"  placeholder="Primeros auxilios (Opcional)"> 
             <select class="controls" required="required" tabindex="1" name="ServSalud">

              <option selected disabled value="" >Servicio de salud</option>
              <?php

              while ($fila=mysqli_fetch_array($result)){
                echo "<option value=".$fila['ID_Serv_Salud'] .">". $fila['Nombre'] . "</option>";


                
              }
              $conexion->close();


          ?>

              
            </select>        
            </div>
              <div class="form-group">
              <label class="titulo_QR">Código QR</label> <br>
                  <label class="titulos">Nivel del código (ECC) : </label>
                  <select class="controls" name="nivel">
                     <option value="H">H - Mejor</option>
                     <option value="M">M</option>
                     <option value="Q">Q</option>
                     <option value="L">L - Peor</option>
                  </select>
              </div>
              <div class="form-group">
                 <label class="titulos">Tamaño : </label>
                 <input class="controls" type="number" min="1" max="10" step="1" class="form-control col-xs-10" name="tamaño" value="5">
              </div>
              <div class="form-group">
                 <label class="control-label"></label>
                 <input type="submit" name="submit" id="submit" class="botons" value="Agregar Persona">
              </div>
         </form>
</section>
     <?php
}


 ?>

</div>

</body>
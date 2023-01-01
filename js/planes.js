<?php
session_start();

require_once "../conexion.php";

$conexion=conexion();

$ID_Usuario=$_SESSION['id_usuario'];

     $sql="SELECT Tipo_Usuario usuario WHERE ID_Usuario=".$ID_Usuario.";";
     
     
?>

function planes($sql){

    if($sql=="Gratis")
        document.getElementById("free").innerHTML = "Adquirido";
    }
    if($sql=="Premium"){
        document.getElementById("premium").innerHTML = "Adquirido";
    }
    else{
        document.getElementById("premium-gold").innerHTML = "Adquirido";
    }
    
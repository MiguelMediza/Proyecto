<?php
		function conexion(){
			$servidor="localhost";
			$usuario="Miguel";
			$password="Mangel22";
			$bd="helpqr";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);
			mysqli_set_charset($conexion, "utf8");

			return $conexion;
		}

 ?>
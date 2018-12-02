<?php
require_once("codifica.php");
function conectarBase(){
	$root="root";
	$clave="";
	$localhost="localhost";
	$base="acceso";
	$tabla="usuarios";
	$mysqli=new mysqli($localhost,$root,$clave,$base);
	return $mysqli;
}
//pruebas
$conectado=conectarBase();
if($conectado){
	echo "conexion correcta";
}
?>

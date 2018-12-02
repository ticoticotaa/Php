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
function altaUsuario($mysqli,$nombre,$clave){
	$key=codificar($clave);
	$mysqli->query("INSERT INTO usuarios (id,nombre,clave) VALUES (NULL,'".$nombre."','".$key."')");
}
function accesoUsuario($conexion,$nombre,$clave){
	$key=codificar($clave);
	$consulta="SELECT * FROM usuarios WHERE nombre='".$nombre."'";
	$resultado=$conexion->query($consulta);
	if($resultado){
			while(($columna=$resultado->fetch_assoc())){
					$nombreTabla=$columna['nombre'];
					$claveTabla=$columna['clave'];
					if($nombre==$nombreTabla){
							$entra=compara($claveTabla,$key);
							if ($entra){
									return true;
							} else {
									return false;
							}
					}
			}
			$resultado->free();
			$conexion->close();
	}else{
		echo "sin resultados";
	}
}

?>

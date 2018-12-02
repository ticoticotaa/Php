<?php
function codificar($texto){
	$mas="dkjfdkajKKKjd";
	$textoCodificado=md5($texto.$mas);
	return $textoCodificado;
}
function compara($textoBaseDatos,$textoUsuario){
	if($textoBaseDatos==$textoUsuario){
		return True;
		}
	else{
		return False;
		}
}
?>
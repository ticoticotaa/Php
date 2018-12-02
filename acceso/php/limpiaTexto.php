<?php
function limpiaTexto($texto){
	$textoLimpio=strip_tags($texto);
	$textoLimpio=trim($textoLimpio);
	return $textoLimpio;
}
?>
<?php
session_start();
if(!$_SESSION["usuario"]){
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1,width=device-width">
<meta name="keywords" content="acceso,usuarios,php,mysqli">
<link rel="stylesheet" href="css/estilos.css" type="text/css">
<title>Acceso Usuarios</title>
</head>
<body>
<header id="cabecera">
<nav id="navegacion">
<ul>
<li><a href="#">Inicio</a></li>
<li><a href="#">Acerca de</a></li>
</ul>
</nav>
</header>
<div id="contenido">
<section>
<article>

<h1>Dentro Usuario</h1>


</article>
</section>
<aside></aside>
<footer id="pie">
<p>@Copyright ------</p>
</footer>
</div>
</body>
</html>
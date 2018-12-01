<?php

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
<div id="formulario">
<h1>Acceso usuarios</h1>
<form autocomplete="off" action="index.php" method="post" name="formulario">
<input type="text" name="nombre" required placeholder="Nombre"/><br/>
<input type="password" name="clave" required placeholder="Clave"/><br/>
<input type="submit" value="Entrar" class="boton"/>
</form>
</div>
</article>
</section>
<aside></aside>
<footer id="pie">
<p>@Copyright ------</p>
</footer>
</div>
</body>
</html>
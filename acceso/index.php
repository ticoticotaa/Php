<?php
require_once("php/limpiaTexto.php");
require_once("php/baseDatos.php");
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
<?php
if(isset($_POST['nombre'])&& isset($_POST['clave'])){
	$nombre=limpiaTexto($_POST['nombre']);
	$clave=limpiaTexto($_POST['clave']);
	$conexion=conectarBase();
	$entra=accesoUsuario($conexion,$nombre,$clave);
	if($entra){
			if(session_status()!== PHP_SESSION_ACTIVE){
			session_start();}
				$_SESSION["autenticado"]="si";
				$_SESSION["usuario"]=$nombre;
				echo "<script>alert('Bienvenido.');
				window.location.href=\"dentroUsuario.php\"</script>";
			}else{
				echo"<script>alert('Error, intentalo de nuevo.');
				window.location.href=\"index.php\"</script>";
			}
	} else {?>
	<form autocomplete="off" action="index.php" method="post" name="formulario">
	<input type="text" name="nombre" required placeholder="Nombre"/><br/>
	<input type="password" name="clave" required placeholder="Clave"/><br/>
	<input type="submit" value="Entrar" class="boton"/>
	</form>
	</div>
	<?php
		}

?>

</article>
</section>
<aside></aside>
<footer id="pie">
<p>@Copyright ------</p>
</footer>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="shortcut icon" type="image/x-icon" href="images/sen2.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PROchat</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet"  href="css/estilos.css">
	<script type="text/javascript" src="js/Validacion.js"></script>
</head>
<body> 
<?php 	
/*importante poner el session de primera*/
session_start();
include "config.php";
/*aca estoy preguntango si el usuario ya inicio sesion, para que vaya directamente al chat*/
if (isset($_SESSION['nick'])) {
				header("location: chat.php");
}else{
?>
<header>
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<center>
				<img src="images/sena.png" class="img img-responsive">
				</center>
			</div>
				<div class="col-sm-8 ">
				<center>
					<br> <br>
					<h3>TECNICO EN PROGRAMACIÓN DE SOFTWARE <br>Ficha:1132318 <br> Cristhian Danilo Carrillo Mendoza</h3>
				</center>
				</div>
			<div class="col-sm-2">
			<br/><br/><br/>
			<center>
				<a href="registro.php">Registrarse</a>					
			</center>
			<br/>
			</div>
		</div>
	</div>
</header>	
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4">
			</div>	
				<div class="col-xs-12 col-sm-4 ">
				<center>
				<br>
				<img src="images/logo.jpg" class="img img-responsive">
					<form action="logeo.php" method="POST" name="miform" novalidate onsubmit="validar(event);"  >
						<input  name="nick" class="form-control" onblur="this.className = 'campo'; destruirAviso(objetos);" pattern="[a-zA-Z0-9]{1,20}" maxlength="20" placeholder="Nombre" required ><span></span>
						<br>
						<input type="password" class="form-control" name="contraseña" onblur="this.className = 'campo'; destruirAviso(objetos);" placeholder="contraseña" required  /> <span></span>
						<br>
						<button type="submit" class="btn btn-warning" name="enviar" >Iniciar Sesión</button> 
					</form>	
				</center>
				<br/><br/>
				</div>	
			<div class="col-xs-12 col-sm-4">
			</div>	
		</div>
	</div>
</section>
<?php 	
}
?>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
			</div>
				<div class="col-sm-8 ">
				<center>
				<h3>Centro de Desarrollo Agroindustrial Turístico y Tecnológico Regional Guaviare <br> Stmendozza &copy; </h3>
				</center>
				</div>
			<div class="col-sm-2">
			</div>
		</div>
	</div>
</footer>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

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
/*en caso de que el usuario se devuelva del chat al registro tendra que dirijirse  al inicio para ingresar al chat si no desea crear otro usuario*/	
	session_start(); 				
	session_destroy();
?>
<header>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 ">
				<center>
				<img src="images/logo.jpg" class="img img-responsive">
				</center>
			</div>
			<div class="col-sm-6">
				<br>	
				<center>	
						<a class="btn btn-warning" role="button" href="index.php">Inicio</a>
				</center>
			</div>
		</div>
	</div>
</header>	
<section>
	<br><br>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-sd-4">
				</div>	
					<div class="col-xs-12 col-sm-4  col-sd-4 well">
						<center>
						<h1>Registro</h1>
						</center>
							<form method="GET"  action="tomaregistro.php" name="miform" novalidate onsubmit="validar(event);"  >
							<input  name="nick"  class="form-control"  onblur="this.className = 'campo'; destruirAviso(objetos);" pattern="[a-zA-Z0-9]{1,20}" maxlength="20" placeholder="Nick" required ><span></span>
							<br>
							<input name="nombre" class="form-control" onblur="this.className = 'campo'; destruirAviso(objetos);" pattern="{1,50}" maxlength="50" placeholder="Nombre" required  /><span></span>
							<br>
							<input name="contraseña"  class="form-control" onblur="this.className = 'campo'; destruirAviso(objetos);" pattern="{1,20}" maxlength="20" type="password" placeholder="Contraseña" required /><span></span>
							<br>
							<input name="repitecontraseña"  class="form-control" onblur="this.className = 'campo'; destruirAviso(objetos);" pattern="{1,20}" maxlength="20" type="password" placeholder="Contraseña" required /><span></span>
							<br>
							<button   class="btn btn-warning" name="enviar" >Enviar</button>  
							</form>
					</div>	
				<div class="col-xs-12 col-sm-4 col-sd-4  ">
				</div>	
			</div>
		</div>
</section>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
			</div>
					<div class="col-sm-4 ">
						<center>
						<br><br>
						<h3>Centro de Desarrollo Agroindustrial Turístico y Tecnológico Regional Guaviare</h3>
						Stmendozza &copy;
						</center>
					</div>
			<div class="col-sm-4">
			</div>
		</div>
	</div>
</footer>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
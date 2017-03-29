<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="shortcut icon" type="image/x-icon" href="images/sen2.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PROchat</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet"  href="css/estilos.css">	
</head>
<body> 
<section>
<?php
	/*manejando sesiones siempre va de primero el session para no mostrar el sitio si no hay un usuario conectado*/ 
	session_start();
	include "config.php";
	/*si el usuario esta conectado muestra el sitio de chat si no lo redirige al index para que se logee o se registre*/
		if (isset($_SESSION['nick']))
		{
			?>
	<header>
			<div class="container">
				<div class="row">
					<div class="col-xs-12  col-sm-4">
					<center>
					<img src="images/logo.jpg" class="img img-responsive">
					</center>
					</div>	
						<div class="col-xs-12 col-sm-4">
						<br/>
						<h3>Bienvenido!!!! <strong><?=$_SESSION['nick'] ?></strong></h3> 	
						</div>
					<div class="col-xs-12 col-sm-4">
					<center>
					<br><br>
					<a href="logout.php" class="btn btn-warning" role="button"> Cerrar Sesión</a>
					</center>
					</div>		
				</div>
			</div>
	</header>
	<br/>
	<section>
			<br/>
			<div class="container">
				<div class="row">
					<div class=" col-sm-2">
					</div>	
						<div class="col-xs-12 col-sm-8 well">
						<center>
						<form   method="POST"  action="proceso.php">
						<!--en estre iframe responsive con boopstrap mostramos los mensajes que se seleccionan desendenemente a la autonumeracion en el archivo mostrarmensajes.php-->
						<iframe class="col-xs-12 col-sm-12 col-md-12 col-lg-12"  src="mostrarmensajes.php" name="iframe" height="400" ></iframe>
						<br/>
						<br/>
						<input class="form-control" type="text" name="mensaje" required><br/><br/>
						<button type="submit" class="btn-warning btn" name="enviar">enviar mensaje</button>
						<br/><br/>
						
						</form>
						</center>	
						</div>
					<div class="  col-sm-2">
					</div>
				</div>
			</div>				
	</section>
	<footer>				
				<div class="col-xs-12">
				<center>
				<br/>
				<img src="images/pro.jpg" class="img img-responsive">
				Stmendozza &copy;
				<br/>
				<h3>CDATTG</h3>
				</center>
				</div>		
			
			<?php
		}else{
			
			header("location: index.php");

		}
 		?>
 	</footer>	

    <script src="js/bootstrap.min.js"></script>
</body>
</html>


		
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
<?php 
/*importante poner el session de primera*/
session_start();
include "config.php";
/*pregunto nuevamente si el usuario ha iniciado sesion*/
if (isset($_SESSION['nick'])) 
{	
	/*guardamos en una variable la consulta a base de datos que seleciona todo de la tabla de mensajes lo ordena por id que es una autonumeracion y organiza de forma descendente*/
	$sql="SELECT * FROM tb_mensajes ORDER BY id_mensaje DESC ";
	/*con este codigo consulto la base de datos para seleccionar los valores y guardarlos en una variable*/
	$query=mysqli_query($conexion,$sql);
	/*esta variable se coge los datos de la variable anterior y los guarda organizadamente en filas en otra variable*/
	$rows=mysqli_num_rows($query);
	/*si la variable contiene mas de 0 filas haga un bucle donde se imprima en el iframe el nick del usuario el menssaje enviado y la hora frente a los anteriores 2 si no muestra un espacio aunque el espacio nunca lo mostrara´por que el input tiene un required que lo obliga a poner algo para enviar*/
	if($rows>0)
	{
		while ($row = mysqli_fetch_array($query)) 
		{ 
 		echo "<br><strong id='usu'>".$row['nick'].":";
 		echo "<br>".$row['mensaje']."</strong>";
 		echo "<p id='hora'>".$row['hora_mensaje']."</p><br>";
		}
	}else{
?>
			 &nbsp;
<?php
	}	
}
/*hago un refresh para actualizar el chat y ver mensajes de los otros usuarios*/
header('refresh:2; url=mostrarmensajes.php');
 ?>	
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

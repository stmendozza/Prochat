<?php 
/*importante poner el session de primera*/
	session_start();
	include "config.php";
/*pregunta si ya enviaron los datos del formulario*/
	if (isset($_POST['enviar'])) 
	{
		$nick=$_SESSION['nick'];
		$mensaje=$_POST['mensaje'];
		/*configuramos nuestra zona horario para ingresar la hora a base de ddatos y guardarla como TIME*/
		date_default_timezone_set("america/bogota");
		/*formato para traer la hora en formato de 12 horas y guardarlo en una variable*/
		$hora=date('h:i:s')."<br>";
		/*hacemos el codigo de consulta a base de datos y la guardamos en una variable*/
		$sql="INSERT INTO tb_mensajes (mensaje,hora_mensaje,nick) VALUES ('".$mensaje."','".$hora."','".$nick."')";
		/*con este codigo consulto la base de datos para insertarle los valores recibidos y lo redirijo al chat.php*/		
		mysqli_query($conexion,$sql);
		header("Location: chat.php"); 
	}else{
		echo "Esto es raro, Algo esta pasando aqui; error!!!";
	}
	header ("refresh:2; Location:mostrarmensaje.php");
 ?>
 
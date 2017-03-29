<?php 
/**/
$nick=$_GET['nick'];
//echo $nick."<br>";
$nombre=$_GET['nombre'];
//echo $nombre."<br>";
$contraseña=$_GET['contraseña'];
//echo $contraseña."<br>";
$repitecontraseña=$_GET['repitecontraseña'];
//echo $repitecontraseña."<br>";
if ($contraseña==$repitecontraseña) 
{
	$contraseña;
}else{

		echo "<script text='text/javascript'>;
						alert('La contraseñas no cionciden');
						window.location= 'registro.php';
					  </script>";

}
$sql= "INSERT INTO tb_usuarios (nick, nombre, contraseña) VALUES ('".$nick."','".$nombre."','".$contraseña."')";

	include "config.php";
		mysqli_query($conexion,$sql);
		 if($conexion-> affected_rows >0) 
		{ 
			session_start();
			$_SESSION['nick']=$nick;
			echo "<script>location.href='chat.php' </script>";
			

		}else{
				echo "<script text='text/javascript'>;
						alert('Los datos no se han guardado. Es probale que la información ya se encuentre en el sistema');
						window.location= 'registro.php';
					  </script>";
				
			}

?>

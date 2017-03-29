<?php
/*hacemos el sesion como primera medida*/ 	 				
	session_start();
	include "config.php";
	/*si el usuario esta logeado*/
	if (isset ($_SESSION['nick'])) 
	{
		/*destruye la sesion men y vaya al index.php sino vaya al index.php */
		session_destroy();
		header("Location: index.php");
	}else{
		header("Location: index.php");
	}
?>

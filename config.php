<?php
/*conexion a base de datos*/
$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "bd_prochat";
$conexion= mysqli_connect ($servidor, $usuario, $clave ,$bd);
mysqli_set_charset($conexion,"utf8")
//mysqli_db_name($conexion,"bd_chat");
//$resultado = $conexion->query( $sql );
?>
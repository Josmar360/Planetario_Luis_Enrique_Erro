<?php
//Declarar variables de los valores de la conexion
$servidor = "localhost";
$usuario = "alumno";
$password = "Contraseña1";
$bd = "Servicio_social";
$conector = mysqli_connect($servidor, $usuario, $password, $bd);
if($conector->connect_error)
{
    die("Error al conectar con la base de datos del planetario".$conector->connect_error);
}
else{
    echo "Conexión exitosa a la base de datos";
}
?>
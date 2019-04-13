<?php  
include("conexion.php");

$nombre = $_POST["nomb"];
$lat = $_POST["lat"];
$lng = $_POST["lng"];

echo($nombre);

$sql = "INSERT INTO usuario
(id,usu_nombre,usu_lat,usu_lng) VALUES ('','$nombre','$lat','$lng')";

$result = mysql_query($sql);
echo "¡Gracias! Hemos recibido sus datos.\n";

    @mysql_query("SET NAMES 'utf8'");










?>

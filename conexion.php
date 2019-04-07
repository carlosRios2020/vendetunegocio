<?php
// Conectando, seleccionando la base de datos
$mysqli = new mysqli("localhost", "root", "", "bd_maps");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}else{
    echo "conexion realizada con exito";
}

// Realizar una consulta MySQL
$query = 'SELECT * FROM usuario';
$result = mysql_query($query) or die('Consulta fallida: '.mysql_error());

// Imprimir los resultados en HTML
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);
?>
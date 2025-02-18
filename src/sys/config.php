<?php 
// Conexión a la base de datos
$servername = "localhost";
$username = "c2261963_agenda";
$password = "fu52DImawi";
$dbname = "c2261963_agenda";
$con = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $con->connect_error);
}
/*fin conexión base de datos */
?>
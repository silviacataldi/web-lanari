<?php 
// Conexión a la base de datos
$servername = "localhost";
$username = "c2261963_compras";
$password = "fu52DImawi";
$dbname = "c2261963_compras";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}
/*fin conexión base de datos */
?>
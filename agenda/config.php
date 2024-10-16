<?php
/*
//Base de datos local
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agenda";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}
*/
//base de datos DonWeb
$servername = "localhost";
$username = "c2261963_agenda";
$password = "fu52DImawi";
$dbname = "c2261963_agenda";
$conn = new mysqli($servername, $username, $password, $dbname);
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}
?>
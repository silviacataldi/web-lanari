<?php
$titulo="Guardar datos";

// Conectarse a la base de datos
$conexion = mysqli_connect("localhost", "c2261963_compras", "fu52DImawi", "c2261963_compras");

// Validar la conexión
if (!$conexion) {
  die("Error de conexión: " . mysqli_connect_error());
}

// Capturar los datos del formulario
$referencia = $_POST["referencia"];
$expediente = $_POST["expediente"]."/".$_POST["anio"];
$tipo = $_POST["tipo"]." Nº ".$_POST["num"];
$fecha = $_POST["fecha"]." ".$_POST["hora"];


// Preparar la consulta SQL
$consulta = "INSERT INTO listado (caratula, expediente, tipo, fecha) VALUES ('$referencia', '$expediente', '$tipo', '$fecha')";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $consulta);

// Validar el resultado
if ($resultado) {
  require("include/top.php");
?>
<h2>Datos Guardados</h2>
<div class="row">
  <a href="compras.php" class="btn btn-primary col-2">Publicar otro pliego</a><p></p>
  <a href="proveedores.php" class="btn btn-primary col-2">Ver pulicación</a><p></p>
</div>
<?php 
} else {
  echo "Error al guardar los datos: " . mysqli_error($conexion);

}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);

//fin página  
 require("include/footer.php") 

 ?>


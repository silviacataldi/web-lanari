<?php
include("config/db.php");

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$especialidad = $_POST['especialidad'];
$profesional = $_POST['profesional'];
$deriva = isset($_POST['deriva']) ? 1 : 0;
$os = $_POST['os'];
$otraos=$_POST['Otraos'];
$wsp = $_POST['wsp'];
$primera= isset($_POST['primera']) ? 1 : 0;
$estado= "P";
$fecha = date('Y-m-d');
$hora = date('H:i:s');
$comentario = $_POST['comentario'];

if ($otraos!="") {
    $os=$otraos;
}
// Realizar la consulta para verificar si el DNI ya existe en la fecha indicada
$sql = "SELECT * FROM datos WHERE dni = '$dni' AND fecha = '$fecha'";
$result = mysqli_query($conn, $sql);

// Verificar si se obtuvieron resultados
if (mysqli_num_rows($result) > 0 || $hora > '12:05:00') {
    echo "<h1>";
    echo "NO SE GUARDARAN LOS DATOS POR UNA DE ESTAS RAZONES:";
    echo "<br>";
    echo "<br>";
    echo "  Ya ha solicitado un turno en el día de hoy para el DNI $dni";
    echo "<br>";
    echo "<br>";
    echo "  O ya no se reciben turnos para la especialidad de la fecha.";
    echo "</h1>";
}else{
    // Si el dni no está dublicado hoy Insertar los datos en la tabla "datos"
    $sql = "INSERT INTO datos (nombre, apellido, dni, especialidad, profesional, deriva, os, wsp, primera,estado, fecha, hora, comentario)
            VALUES ('$nombre','$apellido', $dni, '$especialidad', '$profesional', $deriva, '$os', '$wsp', $primera, '$estado','$fecha', '$hora', '$comentario')";

    if ($conn->query($sql) === TRUE) {
       $mostrar= "Datos guardados exitosamente.\n"."Confirmaremos el turno al teléfono: " . $_POST['wsp'];
       echo nl2br($mostrar);
    } else {
        echo "Error al guardar los datos: " . $conn->error;
    }
    $sql= "SELECT max(id) as id from datos";
    $res= $conn -> query($sql);
    $fila= $res -> fetch_assoc();
    $id= $fila['id'];
    echo $id;


    $conn->close();

    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        <p></p>
        <a class="btn btn-dark btn-lg|sm" href="https://wa.me/+5491159470025?text=Código%20confirmación%20<?php echo $id ?>" role="button">Confirmar</a>
    </body>
    </html>
<?php } ?>
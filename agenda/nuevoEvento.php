<?php
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");
//$hora = date("g:i:A");

require("config.php");
$nombre            = ucwords($_REQUEST['nombre']);
$evento            = ucwords($_REQUEST['evento']);
$f_inicio          = $_REQUEST['fecha_inicio'];
$fecha_inicio      = date('Y-m-d', strtotime($f_inicio)); 

$f_fin             = $_REQUEST['fecha_fin']; 
$seteando_f_final  = date('Y-m-d', strtotime($f_fin));  
$fecha_fin1        = strtotime($seteando_f_final."+ 1 days");
$fecha_fin         = date('Y-m-d', ($fecha_fin1));  
//$color_evento      = $_REQUEST['color_evento'];
//asigna color según el evento
switch ($evento) {
  case 'Ausente':
    $color_evento= "red";
    break;
  case 'Vacaciones':
    $color_evento= "limegreen";
      break;
  case 'M.Jornada':
      $color_evento= "lightcoral";
        break;
  case 'Guardia':
    $color_evento= "lightsteelblue";
      break;
  case 'Medico':
    $color_evento= "indigo";
      break;
  case 'Home':
    $color_evento= "mediumpurple";
  default:
    # code...
    break;
}

$InsertNuevoEvento = "INSERT INTO eventoscalendar(
      nombre,
      evento,
      fecha_inicio,
      fecha_fin,
      color_evento
      )
    VALUES (
      '" .$nombre."',
      '" .$evento. "',
      '". $fecha_inicio."',
      '" .$fecha_fin. "',
      '" .$color_evento. "'
  )";
$resultadoNuevoEvento = mysqli_query($conn, $InsertNuevoEvento);

header("Location:index.php?e=1");

?>
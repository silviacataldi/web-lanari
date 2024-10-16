<?php 
$evento = "vacaciones";
switch ($evento) {
  case 'ausente':
    $color_evento= "orange";
    break;
  case 'vacaciones':
    $color_evento= "lime";
      break;
  case '1/2 jornada':
      $color_evento= "amber";
        break;
  case 'especial':
    $color_evento= "blue";
      break;
  case 'medico':
    $color_evento= "indigo";
      break;
  default:
    # code...
    break;
}

echo $color_evento;


 ?>
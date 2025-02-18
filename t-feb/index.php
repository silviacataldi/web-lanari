<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Turnos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="config/estilos.css">
  <!-- Cargo scripst para el AJAX -->
  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
  </script>
</head>
<body>
	<?php
    include ("config/db.php");

/* Obtener la especialidad para esta fecha */
  // Obtener la fecha de hoy
  date_default_timezone_set('America/Argentina/Buenos_Aires');
  $hoy = date("Y-m-d");
  $hora_actual = date('H:i');

  $choice = False; //variable para marcar si tiene o no que elegir la especialidad (para gastro o traumato)
   // Consultar la tabla especialidades para buscar la fecha de hoy
  $sql = "SELECT nombre FROM especialidades WHERE fecha = '$hoy'";
  $result = $conn->query($sql);

  // Verificar si se encontró la fecha de hoy es decir si hoy hay turnos
 if ($result->num_rows > 0) {
  $row = $result -> fetch_assoc();
  $especialidad= $row['nombre'];
  if ($result->num_rows > 1) {
    $choice= True;
    if ($especialidad=="TRAUMATOLOGIA GENERAL") {
      $mensaje = "Hoy puede solicitar turno para TRAUMATOLOGÍA";
    }
    if ($especialidad=="GASTROENTEROLOGIA") {
      $mensaje = "Hoy puede solicitar turno para GASTROENTEROLOGÍA";
    }

  } else {
    $mensaje = "Hoy puede solicitar turno para " . $especialidad;
     
  }
} else{
  
   // Si no se encontró la fecha de hoy es que no hay agendas abiertas
   $especialidad = "no";
   $mensaje = "Hoy no se entregan turnos";

 }

if (isset($_POST['especialidad'])) {
  $especialidad= $_POST['especialidad'];
}
/* fin obtiene especialidad*/
//Verificar que estemos en horario de atención

if ($hora_actual < "8:00" && $hora_actual > "12:00") {

 $especialidad= "no";
  $mensaje="Solo puede solicitar turnos de 8:00 a 12:00 hs.";
}
?>

  <div class="container col-12">
    <h2> Instituto Lanari </h2>
    <h2>Solicitar Turnos</h2>

    <?php 
      echo "<h3>" . $mensaje . "</h3>"
     ?>

    <!-- Si es traumato o gastro tiene que elegir la subespecialidad -->
    <?php if ($choice) { ?>
      
     <div class='form-group'>
      <form method='POST' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
        <label for='especialidad'>Especialidad:</label>
          <select class='form-control' id='especialidad' name='especialidad' required onchange=this.form.submit()>
              <option>Elija una especialidad específica</option>
              <?php 
                $sql = "SELECT nombre FROM especialidades WHERE fecha = '$hoy'";
              $result = $conn->query($sql);
              while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['nombre'] . "'>" . $row['nombre'] . "</option>";
              }    
               ?>

       </select>
      </form>    
      </div>
     
      
    <?php 
      echo "Seleccionó: ". $especialidad;
    } ?>
     
 
   <?php
   
if ($especialidad != "no"):
    ?>
    <form action="guardar_datos.php" method="POST">
        <div class="form-group">
            <input type="hidden" name="especialidad" value="<?php echo $especialidad ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="dni">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="form-group">
            <label for="dni">DNI:</label>
            <input type="number" class="form-control" id="dni" name="dni" required>
        </div>
        <div class="form-group">
            <label for="wsp">Teléfono para Whatsapp <br>
                Escriba el código de área sin el 0 y el número sin el 15 (ej: 1155553434)</label><br/>
           <input type="text" inputmode="numeric" pattern="[0-9\s]{10,12}" autocomplete="cc-number" maxlength="12"
              id="wsp" name="wsp" required/>
        </div>
        <div class="form-group">
            <label for="profesional">Profesional:</label>
            <select class="form-control" id="profesional" name="profesional" required>
                <option><span class="text-muted">Indistinto</span></option>
                <!-- Carga desde la base de datos -->
                <?php
                $sql = "SELECT nombre FROM profesionales WHERE especialidad = '$especialidad'";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['nombre'] . "'>" . $row['nombre'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="deriva" name="deriva">
            <label class="form-check-label" for="deriva">Si no está disponible acepto turno con otro profesional</label>
        </div>
        <div class="form-group">
            <label for="os">Obra Social:</label>
            <select name="os" id="os" class="form-control" required>
                  <option value="">Elija su Obra Social</option>
                  <option value="PAMI">PAMI</option>
                  <option value="DOSUBA">DOSUBA</option>                  
                  <option value="Otra">Otra</option>
              </select>
        </div>
        <div class="form-group" id="otra_obra_social" style="display: none;" >
            <label for="otra_obra_social_input">Escribir otra Obra Social:</label>
            <input type="text" name="Otraos" id="Otraos" class="form-control">
        </div>

        <div class="form-group">
          <input type="checkbox" name="primera" id="primera">
          <label class="form-check-label" for="primera">Es la primera vez que me atiendo en el Instituto Lanari</label>
          <label class="text-muted">Si es la primera vez que se atiende vamos a necesitar que adjunte una foto del DNI y del Carnet de su Obra Social vía WhatsApp</label>
        </div>
        <div class="form-group">
            <label for="comentario">Comentarios (aquí puede aclarar si tiene alguna preferencia de fechas u horarios)</label>
            <textarea class="form-control" id="comentario" name="comentario"></textarea>
            <label class="text-muted">Sus preferencias serán tomadas en cuenta pero estarán sujetas a disponibilidad</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
    </form>
    <?php endif;

?>

    
  </div>

  <?php
  	 $conn->close(); 
  ?>
  <script type="text/javascript">
    function verificarLongitud() {
      var texto = document.getElementById('wsp').value;

      if (texto.length < 10) {
        alert('Verifique el teléfono ingresado.');
        document.getElementById('wsp').value="";
       
      } 

    }

  </script>
 
  <script>
        document.getElementById("os").addEventListener("change", function() {
            var otraObraSocialDiv = document.getElementById("otra_obra_social");
            var selectedValue = this.value;
            var otraObraInput = document.getElementById("Otraos");

            if (selectedValue === "Otra") {
                otraObraSocialDiv.style.display = "block";
                otraObraInput.required = true;
            } else {
                otraObraSocialDiv.style.display = "none";
                otraObraInput.required = false;
            }
        });
    </script>


</body>
</html>
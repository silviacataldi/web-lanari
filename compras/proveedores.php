<!-- Encabezado -->
<?php 
	$titulo="proveedores";
 	require("include/top.php");

 	// Conexión a la base de datos
 	$host = "localhost";
 	$dbname = "c2261963_compras";
 	$username = "c2261963_compras";
 	$password = "fu52DImawi";

 	try {
 	    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 	} catch (PDOException $e) {
 	    echo "Error de conexión: " . $e->getMessage();
 	    exit();
 	}

 	// Consulta a la base de datos
 	$sql = "SELECT id,caratula, expediente, tipo, fecha FROM listado ORDER BY id DESC";
 	$stmt = $conn->prepare($sql);
 	$stmt->execute();

 	// Obtención de los resultados
 	$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
 	

 	// Cerrar la conexión a la base de datos
 	$conn = null;
 ?>
<!-- Fin encabezado -->
<br>
	<div class="card border-primary mb-3 mx-auto" style="max-width: 60rem;">
	  <div class="card-header">
	  	<h1 class="card-title">Licitaciones</h1>
	  </div>
	  <div class="card-body">
	     <?php foreach ($resultados as $resultado) {
	     	$c1= mb_convert_encoding($resultado["caratula"], "UTF-8", "ISO-8859-1");
	     	$c2= mb_convert_encoding($resultado["expediente"], "UTF-8", "ISO-8859-1");
            $c3= mb_convert_encoding($resultado["tipo"], "UTF-8", "ISO-8859-1");
            $c4= mb_convert_encoding($resultado["fecha"], "UTF-8", "ISO-8859-1");
	     	?>
	     	<h4><?php echo $c1; ?></h4>
	     	<p><strong>EXP UBA: </strong><?php echo $c2; ?> </p>
	     	<p><?php echo $c3; ?></p>
	     	<p><strong>Apertura: </strong><?php echo $c4; ?> </p>
	     	<p></p>
	     	<p> <strong>CONSULTA Y RETIRO DE PLIEGOS</strong> </p>
	     	<p>Combatientes de Malvinas 3150 3º Piso CABA</p>
	     	<p>DIRECCIÓN DE COMPRAS Y CONTRATACIONES</p>
	     	<p>De 8 a 12 horas</p>
	     	<p>Tel. 5287-3751/52</p>
	     	<p>compras@lanari.uba.ar</p>

	     	<p>Sólo los pliegos correspondientes a Trámites simplificados podrán ser remitidos vía mail.</p>

	     	<p>(<a href="include/reglamento_contratacion.pdf" target="_blank">Ver reglamento</a> )</p>
	     	<hr size="5">
	                     
	      <?php } ?>
	  </div>
	</div>

	<!-- Pié de página -->
<?php 
	require("include/footer.php");
 ?>
	<!-- Fin pie -->
	
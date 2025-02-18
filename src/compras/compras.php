<?php session_start();?>
<?php 
	$BTclase="show";
	$titulo="Compras Publicar";
	
	if (empty($_SESSION['usuario'])) {
		header("location: index.php");
	exit();
	}
	//variable para obtener el año actual
	$current= date("Y");
require("include/top.php");
?>
<br>
	<div class="card border-primary mb-3 mx-auto" style="max-width: 60rem;">
	  <div class="card-header">
	  	<h4 class="card-title">Publicar Pliego</h4>
	  </div>
	  <div class="card-body">
	     <form action="guardar.php" method="post">

	         <div class="mb-3">
	           <label for="referencia">Referencia: </label>
	           <input type="text" class="form-control" id="referencia" name="referencia" placeholder="Ingrese la referencia">
	         </div>
	         <div class="row">
		         <div class="mb-3 col-6">
		           <label for="expediente">Expediente: </label>
		           <input type="text" class="form-control" id="expediente" name="expediente" placeholder="Ingrese el expediente">
		         </div>
		         <div class="mb-3 col-2">
		         	<label>Año: </label>
		         	<input type="text" class="form-control" id="anio" name="anio" value= <?php echo $current; ?>>
		         </div>
		     </div>
	         <div class="row">
		         <div class="mb-3 col-6">
		           <label for="tipo">Tipo: </label>
		           <input type="text" class="form-control" id="tipo" name="tipo" value="Contratación directa" placeholder="Ingrese el tipo">
		         </div>
		         <div class="mb-3 col-2">
		         	<label for= "num">Nº: </label>
		         	<input type="text" name="num" class="form-control" id="num" placeholder="###">
		         </div>
		     </div>
		     <div class="row">
		         <div class="mb-3 col-4">
		           <label for="fecha">Fecha: </label>
		           <input type="date" class="form-control" id="fecha" name="fecha">
		         </div>
		         <div class="mb-3 col-4">
		         	<label for="hora">Hora: </label>
		         	<input type="text" name="hora" class="form-control" id="hora" value="11:00 hs.">	         	
		         </div>
		     </div>
	         <button type="submit" class="btn btn-primary">Guardar</button>

	       </form>
	  </div>
	</div>


<?php
//fin página	
 require("include/footer.php") 

?>
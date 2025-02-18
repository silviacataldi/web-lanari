<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.btn-info{
			color: 	#fff;
			font-weight: bold;
			background-color: #5892EE;
			border: none;
		}
		.btn-info:hover{
			color: #fff;
			background-color: #5892EE;
			border: none;
		}
		.btn-primary{
			border-color: bisque;
		}
	</style>
</head>
<body>
	<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
<!--MENÚ-->
			<div class="btn-group-vertical" role="group" aria-label="Vertical button group">
				<!-- <button type="button" class="btn btn-info">texto</button> -->
				<?php if (strpos($url, 'clinica.php') !==false) :?>				 	
				 	<button type="button" class="btn btn-info">CLÍNICA MÉDICA</button>
				<?php elseif (strpos($url, 'clinica.php') ==false) : ?>
					<a href="clinica.php" class="btn btn-primary">CLÍNICA MÉDICA</a>
				<?php endif; ?>			    
			    <?php if (strpos($url, 'patologia') !==false) :?>				 	
				 	<button type="button" class="btn btn-info">CIRUGÍA</button>
				<?php elseif (strpos($url, 'patologia') ==false) : ?>
					<a href="cirugia.php" class="btn btn-primary">CIRUGÍA</a>
				<?php endif; ?>

				<?php if (strpos($url, 'asocial') !==false) :?>
				 	<button type="button" class="btn btn-info">BIOQUÍMICA</button>
				<?php elseif (strpos($url, 'asocial') ==false) : ?>
					<a href="bioquimica.php" class="btn btn-primary">BIOQUÍMICA</a>
				<?php endif; ?>
				
				<?php if (strpos($url, 'cardiologia') !==false) :?>
				 	<button type="button" class="btn btn-info">NEFROLOGÍA</button>
				<?php elseif (strpos($url, 'cardiologia') ==false) : ?>
					<a href="nefrologia.php" class="btn btn-primary">NEFROLOGÍA</a>
				<?php endif; ?>	
				<?php if (strpos($url, 'paliativos') !==false) :?>
				 	<button type="button" class="btn btn-info">INVESTIGACIÓN CLÍNICA</button>
				<?php elseif (strpos($url, 'paliativos') ==false) : ?>
					<a href="investigacion.php" class="btn btn-primary">INVESTIGACIÓN CLÍNICA</a>
				<?php endif; ?>
				<?php if (strpos($url, 'dermatologia') !==false) :?>
				 	<button type="button" class="btn btn-info">DIAGNÓSTICO POR IMÁGENES</button>
				<?php elseif (strpos($url, 'dermatologia') ==false) : ?>
					<a href="imagenes.php" class="btn btn-primary">DIAGNÓSTICO POR IMÁGENES</a>
				<?php endif; ?>
				
		
		</div>

			
		</div>


		<!-- FIN MENÚ VERTICAL-->
</body>
</html>
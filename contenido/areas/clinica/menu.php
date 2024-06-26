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
				 	<button type="button" class="btn btn-info">ÁREA CLÍNICA MÉDICA</button>
				<?php elseif (strpos($url, 'clinica.php') ==false) : ?>
					<a href="clinica.php" class="btn btn-primary">ÁREA CLÍNICA MÉDICA</a>
				<?php endif; ?>			    
			    <?php if (strpos($url, 'patologia') !==false) :?>				 	
				 	<button type="button" class="btn btn-info">ANATOMÍA PATOLÓGICA</button>
				<?php elseif (strpos($url, 'patologia') ==false) : ?>
					<a href="patologia.php" class="btn btn-primary">ANATOMÍA PATOLÓGICA</a>
				<?php endif; ?>

				<?php if (strpos($url, 'asocial') !==false) :?>
				 	<button type="button" class="btn btn-info">ASISTENTE SOCIAL</button>
				<?php elseif (strpos($url, 'asocial') ==false) : ?>
					<a href="asocial.php" class="btn btn-primary">ASISTENTE SOCIAL</a>
				<?php endif; ?>
				
				<?php if (strpos($url, 'cardiologia') !==false) :?>
				 	<button type="button" class="btn btn-info">CARDIOLOGÍA</button>
				<?php elseif (strpos($url, 'cardiologia') ==false) : ?>
					<a href="cardiologia.php" class="btn btn-primary">CARDIOLOGÍA</a>
				<?php endif; ?>	
				<?php if (strpos($url, 'paliativos') !==false) :?>
				 	<button type="button" class="btn btn-info">CUIDADOS PALIATIVOS</button>
				<?php elseif (strpos($url, 'paliativos') ==false) : ?>
					<a href="paliativos.php" class="btn btn-primary">CUIDADOS PALIATIVOS</a>
				<?php endif; ?>
				<?php if (strpos($url, 'dermatologia') !==false) :?>
				 	<button type="button" class="btn btn-info">DERMATOLOGÍA</button>
				<?php elseif (strpos($url, 'dermatologia') ==false) : ?>
					<a href="dermatologia.php" class="btn btn-primary">DERMATOLOGÍA</a>
				<?php endif; ?>
				
				<?php if (strpos($url, 'endocrinologia') !==false) :?>
				 	<button type="button" class="btn btn-info">ENDOCRINOLOGÍA CLÍNICA, <br>METABOLISMO Y NUTRICIÓN CLÍNICA</button>
				<?php elseif (strpos($url, 'endocrinologia') ==false) : ?>
					<a href="endocrinologia.php" class="btn btn-primary">ENDOCRINOLOGÍA CLÍNICA, <br>METABOLISMO Y NUTRICIÓN CLÍNICA</a>
				<?php endif; ?>
				
				<?php if (strpos($url, 'gastroenterologia') !==false) :?>
				 	<button type="button" class="btn btn-info">GASTROENTEROLOGÍA</button>
				<?php elseif (strpos($url, 'gastroenterologia') ==false) : ?>
					<a href="gastroenterologia.php" class="btn btn-primary">GASTROENTEROLOGÍA</a>
				<?php endif; ?>
								
				<?php if (strpos($url, 'guardia') !==false) :?>
				 	<button type="button" class="btn btn-info">GUARDIA MÉDICA</button>
				<?php elseif (strpos($url, 'guardia') ==false) : ?>
					<a href="guardia.php" class="btn btn-primary">GUARDIA MÉDICA</a>
				<?php endif; ?>
								
				<?php if (strpos($url, 'hematologia') !==false) :?>
				 	<button type="button" class="btn btn-info">HEMATOLOGÍA</button>
				<?php elseif (strpos($url, 'hematologia') ==false) : ?>
					<a href="hematologia.php" class="btn btn-primary">HEMATOLOGÍA</a>
				<?php endif; ?>
				
				<?php if (strpos($url, 'hemoterapia') !==false) :?>
				 	<button type="button" class="btn btn-info">HEMOTERAPIA</button>
				<?php elseif (strpos($url, 'hemoterapia') ==false) : ?>
					<a href="hemoterapia.php" class="btn btn-primary">HEMOTERAPIA</a>
				<?php endif; ?>				
				
				<?php if (strpos($url, 'infectologia') !==false) :?>
				 	<button type="button" class="btn btn-info">INFECTOLOGÍA</button>
				<?php elseif (strpos($url, 'infectologia') ==false) : ?>
					<a href="infectologia.php" class="btn btn-primary">INFECTOLOGÍA</a>
				<?php endif; ?>
				
				<?php if (strpos($url, 'inmunologia') !==false) :?>
				<button type="button" class="btn btn-info">INMUNOLOGÍA/REUMATOLOGÍA</button>
				<?php elseif (strpos($url, 'inmunologia') ==false) : ?>
					<a href="inmunologia.php" class="btn btn-primary">INMUNOLOGÍA/REUMATOLOGÍA</a>
				<?php endif; ?>
				
				<?php if (strpos($url, 'kinesiologia') !==false) :?>
				<button type="button" class="btn btn-info">KINESIOLOGÍA</button>
				<?php elseif (strpos($url, 'kinesiologia') ==false) : ?>
					<a href="kinesiologia.php" class="btn btn-primary">KINESIOLOGÍA</a>
				<?php endif; ?>
				
				<?php if (strpos($url, 'nefrologia') !==false) :?>
				<button type="button" class="btn btn-info">NEFROLOGÍA Y TRANSPLANTE RENAL</button>
				<?php elseif (strpos($url, 'nefrologia') ==false) : ?>
					<a href="nefrologia.php" class="btn btn-primary">NEFROLOGÍA Y TRANSPLANTE RENAL</a>
				<?php endif; ?>

				
				<?php if (strpos($url, 'neumonologia') !==false) :?>
				 	<button type="button" class="btn btn-info">NEUMONOLOGÍA</button>
				<?php elseif (strpos($url, 'neumonologia') ==false) : ?>
					<a href="neumonologia.php" class="btn btn-primary">NEUMONOLOGÍA</a>
				<?php endif; ?>

				<?php if (strpos($url, 'neurologia') !==false) :?>
				 <button type="button" class="btn btn-info">NEUROLOGÍA</button>
				<?php elseif (strpos($url, 'neurologia') ==false) : ?>
					<a href="neurologia.php" class="btn btn-primary">NEUROLOGÍA</a>
				<?php endif; ?>
				
				<?php if (strpos($url, 'oncologia') !==false) :?>
				 <button type="button" class="btn btn-info">ONCOLOGÍA</button>
				<?php elseif (strpos($url, 'oncologia') ==false) : ?>
					<a href="oncologia.php" class="btn btn-primary">ONCOLOGÍA</a>
				<?php endif; ?>

				<?php if (strpos($url, 'smental') !==false) :?>
				 <button type="button" class="btn btn-info">SALUD MENTAL</button>
				<?php elseif (strpos($url, 'smental') ==false) : ?>
					<a href="smental.php" class="btn btn-primary">SALUD MENTAL</a>
				<?php endif; ?>				
				
		
		</div>

			
		</div>


		<!-- FIN MENÚ VERTICAL-->
</body>
</html>
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
				<!-- <button type="button" class="btn btn-info">texto</button>  -->
				<?php if (strpos($url, 'bioquimica.php') !==false) :?>
				 	<button type="button" class="btn btn-info">ÁREA DE DIAGNÓSTICO <br/> BIOQUÍMICO</button>
				<?php elseif (strpos($url, 'bioquimica.php') ==false) : ?>
					<a href="bioquimica.php" class="btn btn-primary">ÁREA DE DIAGNÓSTICO <br/> BIOQUÍMICO</a>
				<?php endif; ?>

			    <?php if (strpos($url, 'endocrinologia') !==false) :?>
				 	<button type="button" class="btn btn-info">DIVISIÓN ENDOCRINOLOGÍA</button> 
				<?php elseif (strpos($url, 'endocrinologia') ==false) : ?>
					<a href="endocrinologia.php" class="btn btn-primary">DIVISIÓN ENDOCRINOLOGÍA</a>
				<?php endif; ?>

			    <?php if (strpos($url, 'nefrologia-exp') !==false) :?>
				 	<button type="button" class="btn btn-info">DIV. NEFROLOGÍA EXPERIMENTAL<br/>
					Y BIOQUÍMICA MOLECULAR</button> 
					
				<?php elseif (strpos($url, 'nefrologia-exp') ==false) : ?>
					<a href="nefrologia-exp.php" class="btn btn-primary">DIV. NEFROLOGÍA EXPERIMENTAL<br/>
					Y BIOQUÍMICA MOLECULAR</a>
				<?php endif; ?>

			    <?php if (strpos($url, 'histocompatibilidad') !==false) :?>
				 	<button type="button" class="btn btn-info">DIV. HISTOCOMPATIBILIDAD</button> 
				<?php elseif (strpos($url, 'histocompatibilidad') ==false) : ?>
					<a href="histocompatibilidad.php" class="btn btn-primary">DIV. HISTOCOMPATIBILIDAD</a>
				<?php endif; ?>

			    <?php if (strpos($url, 'inmunologia') !==false) :?>
				 	<button type="button" class="btn btn-info">DIV. INMUNOLOGÍA</button> 
				<?php elseif (strpos($url, 'inmunologia') ==false) : ?>
					<a href="inmunologia.php" class="btn btn-primary">DIV. INMUNOLOGÍA</a>
				<?php endif; ?>

			    <?php if (strpos($url, 'microbiologia') !==false) :?>
				 	<button type="button" class="btn btn-info">DEPARTAMENTO MICROBIOLOGÍA</button> 
				<?php elseif (strpos($url, 'microbiologia') ==false) : ?>
					<a href="microbiologia.php" class="btn btn-primary">DEPARTAMENTO MICROBIOLOGÍA</a>
				<?php endif; ?>

			    <?php if (strpos($url, 'clinica') !==false) :?>
				 	<button type="button" class="btn btn-info">DEPARTAMENTO DE <br/>BIOQUÍMICA CLÍNICA</button> 
				<?php elseif (strpos($url, 'clinica') ==false) : ?>
					<a href="clinica.php" class="btn btn-primary">DEPARTAMENTO DE <br/>BIOQUÍMICA CLÍNICA</a>
				<?php endif; ?>

			    <?php if (strpos($url, 'div-quimica') !==false) :?>
				 	<button type="button" class="btn btn-info">DIVISIÓN QUÍMICA CLÍNICA/<br/> QUÍMICA ESPECIAL</button>
				<?php elseif (strpos($url, 'div-quimica') ==false) : ?>
					<a href="div-quimica.php" class="btn btn-primary">DIVISIÓN QUÍMICA CLÍNICA/<br/> QUÍMICA ESPECIAL</a>
				<?php endif; ?>


			    <?php if (strpos($url, 'hematologia') !==false) :?>
				 	<button type="button" class="btn btn-info">DIVISIÓN HEMATOLOGÍA <br/>BIOQUÍMICA</button>
				<?php elseif (strpos($url, 'hematologia') ==false) : ?>
					<a href="hematologia.php" class="btn btn-primary">DIVISIÓN HEMATOLOGÍA <br/>BIOQUÍMICA</a>
				<?php endif; ?>


			    <?php if (strpos($url, 'guardia') !==false) :?>
				 	<button type="button" class="btn btn-info">DIVISIÓN GUARDIA <br/>(URGENCIAS Y EMERGENCIAS)</button>
				<?php elseif (strpos($url, 'guardia') ==false) : ?>
					<a href="guardia.php" class="btn btn-primary">DIVISIÓN GUARDIA <br/>(URGENCIAS Y EMERGENCIAS)</a>
				<?php endif; ?>


			    <?php if (strpos($url, 'coagulacion') !==false) :?>
				 	<button type="button" class="btn btn-info">DIVISIÓN COAGULACIÓN<br/> Y HEMOSTASIA</button>
				<?php elseif (strpos($url, 'coagulacion') ==false) : ?>
					<a href="coagulacion.php" class="btn btn-primary">DIVISIÓN COAGULACIÓN<br/> Y HEMOSTASIA</a>
				<?php endif; ?>


			    <?php if (strpos($url, 'inmunoserologia') !==false) :?>
				 	<button type="button" class="btn btn-info">DIVISIÓN INMUNOSEROLOGÍA</button>
				<?php elseif (strpos($url, 'inmunoserologia') ==false) : ?>
					<a href="inmunoserologia.php" class="btn btn-primary">DIVISIÓN INMUNOSEROLOGÍA</a>
				<?php endif; ?>


			    <?php if (strpos($url, 'extracciones') !==false) :?>
				 	<button type="button" class="btn btn-info">DIVISIÓN EXTRACCIONES</button>
				<?php elseif (strpos($url, 'extracciones') ==false) : ?>
					<a href="extracciones.php" class="btn btn-primary">DIVISION EXTRACCIONES</a>
				<?php endif; ?>						
				
		
		</div>

			
		</div>


		<!-- FIN MENÚ VERTICAL-->
</body>
</html>
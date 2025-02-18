<?php 
	$title="Dermatología";
	require("../../../template/top.php"); ?>
<style>
    .margen {  
        margin-left: 10% ;
        margin-right: 30%;
        margin-bottom: 40px;
        margin-top: 40px;

    }
    .accordion-button{
        color: #fff;
        background-color: #0D6EFD;
    }
    img{
        margin:10px;
    }
    .lista{
    	list-style-type: disc;
    	margin-left: 40px;    	
    }
</style>
<div class="container margen">

	<div class="row">
		<div class="col-8">
		<h2>DERMATOLOGÍA</h2>		
		<h3>Contacto</h3>
		<p><strong>Ubicación</strong>: Primer Cuerpo, Segundo Piso</p>
		<p><strong>Tel</strong>: (+54) 011-5287-3788</p>
		<p></p>
		<div class="alert alert-dark" role="alert">
			<h3>Plantel</h3>
			<ul class="lista">
				<li><strong>Jefe del Servicio:</strong>Dr. Horacio Cabo</li>
				<li><strong>Subjefa:</strong>Dra. Emilia Cohen Sabban</li>
				<li><strong>Médica de Planta:</strong>Dra. Paula Friedman</li>
				<li><strong>Médica de Planta:</strong>Dra. María Belén Marín</li>
				<li><strong>Médica de Planta:</strong>Dra. Mónica Pazos</li>
				<li><strong>Médica de Planta:</strong>Dra. Rosario Peralta</li>
				<li><strong>Médica de Planta:</strong>Dra. Bettina Rigo</li>
				<li><strong>Medica de Planta:</strong>Dra. Mariana Tula</li>
			</ul>
		</div>
		<p></p>
		<div class="alert alert-dark" role="alert">
			<h3>Prestaciones</h3>
			<ul class="lista">
				<li>Electrocoagulación</li>
				<li>Criocirugía</li>
				<li>Dermatoscopía</li>
				<li>Capilaroscopía</li>
				<li>Podología</li>
			</ul>
		</div>
	</div>
		<div class="col-4">
			<?php include("menu.php"); ?>

			
		</div>


		<!-- FIN MENÚ VERTICAL-->

	</div>
	</div>
</div>
<?php include("../../../template/footer.php"); ?>
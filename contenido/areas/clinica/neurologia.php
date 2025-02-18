<?php 
$title="Neurología";
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
		<h2>NEUROLOGÍA</h2>
		<h4>Contacto</h4>
		<p><strong>Ubicaci&oacute;n</strong>: Segundo Cuerpo, segundo piso</p>
		<p><strong>Telefono</strong>: 011-5287-3804</p>
		<p><strong>Email</strong>:&nbsp;<a href="mailto:neurologia@lanari.uba.ar">neurologia@lanari.uba.ar</a></p>
	<div class="alert alert-dark" role="alert">		
		<h3>Plantel</h3>

		<ul class="lista">
			<li><strong>Jefe Secci&oacute;n</strong>: Santoro, Patricia</li>
			<li><strong>Jefe Divisi&oacute;n Electroencefalografia</strong>: Garbezza, Lidia Mabel</li>
			<li><strong>Medica</strong>: Quarracino, Cecilia</li>
			<li><strong>Medica</strong>: Salutto, Valeria Lujan</li>
			<li><strong>Administrativa</strong>: Marforio, Elida Gladys</li>
		</ul>
	</div>
	</div>
		<div class="col-4">
			<?php include("menu.php"); ?>
		</div>


		

	</div>
	</div>
</div>
<?php include("../../../template/footer.php"); ?>
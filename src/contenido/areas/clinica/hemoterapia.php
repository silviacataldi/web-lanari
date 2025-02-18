<?php 
$title="Hemoterapia";
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
		<div class="col-8" >
			<h2>HEMOTERAPIA</h2>
			<div class="row row-cols-1 row-cols-sm-2 g-3">
			  <div class="col">
			   	<h4>Contacto</h4>
				<p><strong>Ubicaci&oacute;n</strong>: Segundo Cuerpo, Planta baja</p>
				<p><strong>Telefono</strong>: 011-5287-3929&nbsp;</p>
				<p><strong>Email</strong>:&nbsp;hemoterapia@lanari.uba.ar</p>
				<p><strong>Instagram:</strong>@hemoterapialanari</p>
				<div class="alert alert-dark" role="alert">
					<h2>Plantel</h2>
					<ul>
					<li><strong>Jefe Departamento</strong>:&nbsp;</li>
					<li><strong>Jefe Divisi&oacute;n Tecnicos</strong>: Soto, Claudio Roberto</li>
					<li><strong>Medico</strong>: Dr. Alejo, Echag&uuml;e</li>
					<li><strong>Tecnica</strong>: Lopez, Mirta Graciela</li>
					<li><strong>Tecnica</strong>: Signorelli, Analia Laura</li>
					<li><strong>Tecnica</strong>: Santoianni, Valeria Soledad</li>
					<li><strong>Tecnico</strong>: Papuccio, Carlos Gabriel</li>
					<li><strong>Tecnico</strong>: Escobar, Yesica Natalia</li>
					<li><strong>Tecnico</strong>: Falon, Cristina Beatriz</li>
					<li><strong>Administrativa</strong>: Cristina Bleynat</li>
					</ul>
				</div>
			  </div>
			  <div class="col">
			    <div class="card">
			      <img src="../../../img/donar-sangre-1.jpg" width="124px" height="120px" class="text-center" alt="Donar-Sangre">
			      <div class="card-body">
			        <h5 class="card-title">INFORMACIÓN PARA DONANTES DE SANGRE<br> <small class="text-muted">HORARIO DE ATENCIÓN:
					DE LUNES A VIERNES DE 07:30 A 9:30 HS.</small> </h5>

			        <p class="card-text">
					<h5 class="text-secondary">Requisitos básicos:</h5>

					<ul class="lista">
						<li>Desayunar preferentemente sin lácteos ni grasas e ingerir abundante líquido.</li>
						<li>Pesar más de 50 kg.</li>
						<li>Tener entre 18 y 65 años.</li>
						<li>Si toma alguna medicación, consultar al servicio (en muchos casos, no es necesario suspenderla)</li>
						<li>Sentirse bien y no estar cursando algún síntoma gripal.</li>
						<li>Descansar bien la noche previa a donar.</li>
						<li>Haber donado sangre hace más de dos meses.</li>
						<li>Haber pasado 12 meses quienes se hayan realizado piercing, tatuajes o acupuntura.</li>
						<li>Haber pasado 6 meses quienes se hayan realizado procedimientos quirúrgicos o invasivos (laparoscopias/endoscopías).</li>
					
					</ul>


			        </p>
			      </div>
			    </div>
			  </div>
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
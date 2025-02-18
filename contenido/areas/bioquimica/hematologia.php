<?php $title="title";
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
		<h2>DIVISION HEMATOLOGIA BIOQUIMICA</h2>
		<h4>Contacto</h4>
		<p><strong>Jefa de División:</strong>Bioq. Soledad A. Cellucci </p>
		<p><strong>Ubicación: </strong>Primer Cuerpo, pasillo. Subsuelo</p>
		<p><strong>Teléfono:</strong> 5287-3866- Interno: 73866</p>
		<p><strong>Email:</strong><a href="mailto:hematbioquimica@lanari.uba.ar">hematbioquimica@lanari.uba.ar</a> </p>
		<div class="alert alert-dark" role="alert">
			<h3>PRESENTACIÓN</h3>
			<p>El Laboratorio de Hematología forma parte del Departamento de Bioquímica Clínica del Instituto El servicio funciona en dos turnos, de lunes a viernes desde las 7,00 hs. hasta las 20,30 hs.</p>
			<p>En el ámbito asistencial este laboratorio realiza pruebas que contribuyen al diagnóstico de patologías hematológicas (anemias , leucemias, síndromes mielodisplásicos o linfoproliferativos , linfomas, etc ) de pacientes internados provenientes de las salas de Clínica Médica y Cuidados Intensivos; pacientes con insuficiencia renal crónica (hemodiálisis o  diálisis peritoneal) que se encuentran  en plan de trasplante renal y los ya trasplantados; pacientes oncológicos y en general pacientes ambulatorios y controles pre ocupacionales de la Universidad de Buenos Aires que se atienden en los consultorios externos. Con respecto a la actividad docente el laboratorio participa en la formación de residentes bioquímicos, concurrentes y pasantes.</p>
		</div>
		<!-- Comienzo Acordeón -->
			<div class="accordion" id="accordionBasic">
			 <div class="accordion-item">
			    <h2 class="accordion-header" id="headingOne">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
			        LISTADO DE PRUEBAS DEL LABORATORIO DE HEMATOLOGÍA
			      </button>
			    </h2>
			    <div id="collapseOne" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionBasic">
			      <div class="accordion-body">
			        <ul class="lista">
			        	<li>Hemograma automatizado</li>
			        	<li>Frotis de sangre periférica
			        	<li>V.S.G Westergren
			        	<li>Proteína C Reactiva
			        	<li>Ferremia
			        	<li>Capacidad total de fijación de hierro (CTFH)
			        	<li>% de Saturación
			        	<li>Ferritina sérica
			        	<li>Reticulocitos
			        	<li>Haptoglobina
			        	<li>Hemoglobina libre en plasma
			        	<li>Hemosiderinuria
			        	<li>Cuantificación de Hb A2
			        	<li>Cuantificación de Hb Fetal
			        	<li>Electroforesis de Hemoglobina pH alcalino</li>
			        	<li>Prueba de Falciformación</li>
			        	<li>Prueba de Carrell y Kay (Hb inestables)</li>
			        	<li>Cuerpos de Inclusión  (HbH/cuerpos de Heinz)</li>
			        	<li>Test de Brewer</li>
			        	<li>Autohemólisis</li>
			        	<li>Curvas de Fragilidad Osmótica Eritrocitaria (diferida)</li>
			        	<li>Prueba de Ham</li>
			        	<li>Prueba de la Sucrosa</li>
			        </ul>
			       </div>
			    </div>
			  </div>
			  
			</div>
			<!-- Fin Acordeón -->
	</div>
		<div class="col-4">
			<?php include("menu.php"); ?>

			
		</div>


		<!-- FIN MENÚ VERTICAL-->

	</div>
	</div>
</div>

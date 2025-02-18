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
		<h2>DIVISION GUARDIA DE LABORATORIO <BR> (URGENCIAS Y EMERGENCIAS)</h2>
		<h4>Contacto</h4>
		<p><strong>Jefa de División:</strong> Bioq. Patricia G. Indaburu</p>
		<p><strong>Ubicación:</strong> Primer Cuerpo, pasillo. Subsuelo</p>
		<p><strong>Teléfono:</strong> 5287-3863 – Interno: 73863</p>
		<p><strong>Email:</strong><a href="mailto:laboratoriodeguardia@lanari.uba.ar">laboratoriodeguardia@lanari.uba.ar</a> </p>		
		<div class="alert alert-dark" role="alert"><p>Este Laboratorio procesa muestras provenientes del Servicio de Guardia Médica, y de pacientes internados (en terapia intensiva,sala general, guardia y diálisis) que requieren una respuesta con carácter de emergencia o urgencia. Funciona con un régimen de 24 horas.</p>
				<p>Por contar con un analizador de gases de gran plataforma realiza los estudios Ácido-base y Co-oximetría y medio interno del Laboratorio Pulmonar del servicio de Neumonología del Instituto.</p>
				<p>Garantiza la calidad de los resultados a través de la utilización de un programa de calidad interno diario y de uno externo quincenal al igual que el resto de los laboratorios del Departamento, además participa de un programa especial de calidad analítica: Portal Radiometer para las determinaciones de Estado Acido Base y Co-oximetría.</p>
				<p>En cuanto a la actividad docente interviene en la formación de los residentes bioquímicos del Instituto y recibe residentes y concurrentes de distintas Instituciones públicas y privadas, participando además en disertaciones dentro y fuera de la Institución.</p>
		</div>
		<div class="alert alert-dark" role="alert"><h3>PLANTEL</h3>
				<p>Jefa de División: Dra. Patricia Indaburu</p>
				<p>Dra. Mónica Álvarez</p>
				<p>Dr. Gonzalo de la V</p>
				<p>Dra. Natalia Nuñez</p>
		</div>
		<div class="accordion" id="accordionBasic">
		 <div class="accordion-item">
		    <h2 class="accordion-header" id="headingOne">
		      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
		        LISTADO DE PRUEBAS DEL LABORATORIO DE GUARDIA
		      </button>
		    </h2>
		    <div id="collapseOne" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionBasic">
		      <div class="accordion-body">
		        <ul class="lista">
		        	<li><strong>Hematología</strong></li>
			        	<ul class="lista">
			        		<li>Hemograma automatizado</li>
			        		<li>Frotis de sangre periférica</li>
			        		<li>VSG Westergren</li>
			        	</ul>
		        	<li><strong>Coagulación</strong> </li>
			        	<ul class="lista">
			        		<li>Tiempo de protrombina/RIN</li>
			        		<li>KPTT</li>
			        		<li>Recuento de plaquetas</li>
			        	</ul>
		        	<li><strong>Estado Ácido Base y OximetríapH</strong></li>
			        	<ul class="lista">
				        	<li>pCO2</li>
				        	<li>pO2</li>
				        	<li>Hemoglobina</li>
				        	<li>Saturación de oxígeno
				        	<li>Exceso de base</li>
				        	<li>Bicarbonato</li>
				        	<li>Contenido de oxígeno arterio-alveolar</li>
				        	<li>Determinación p50</li>
				        	<li>Fracción de Hemoglobina oxigenada</li>
				        	<li>Fracción de Carboxi hemoglobina</li>
				        	<li>Fracción de Metahemoglobina</li>
				        </ul>
		        	<li><strong>Metabolitos</strong> </li>
			        	<ul class="lista">
					        <li>Glucosa</li>
					        <li>Lactato</li>
					        <li>Urea</li>
					        <li>Creatinina</li>
			        	</ul>
		        	<li><strong>Electrolitos</strong> </li>
			        	<ul class="lista">	
			        		<li>Sodio</li>
			        		<li>Potasio</li>
			        		<li>Cloro</li>
			        		<li>Calcio iónicov</li>	
			        	</ul>	
		        	<li><strong>Enzimas</strong> </li>
			        	<ul class="lista">
				        	<li>Creatinquinasa (CK)</li>
				        	<li>Lactato deshidrogenasa (LDH)</li>
				        	<li>Aspartatoaminotransferasa (GOT)</li>
				        	<li>Alaninoaminotransferasa (GPT)</li>
				        	<li>Amilasa</li>
				        	<li>Líquidos de punción (Citológico y físicoquímico)</li>
				        	<li>Articular</li>
				        	<li>Pleural</li>
				        	<li>Pericárdico</li>
				        	<li>Líquido de diálisis peritoneal</li> 
				        	<li>Proteínas (suero/orina)</li>
				        	<li>Orina completa</li>
				        	<li>Leucocitos en materia fecal </li>       	 
				        	<li>Péptido natriurético B (BNP)</li>
				        	<li>Troponina I de alta sensibilidad</li>
			        	</ul>
		        </ul>
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

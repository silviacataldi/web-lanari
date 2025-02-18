<?php

$title = "Oncología";
require("../../../template/top.php");

?>


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
		<h2>ONCOLOGíA</h2>
		<h4>Contacto</h4>
			<p><strong>Ubicación</strong>:&nbsp;Primer Cuerpo, Primer piso</p>
			<p><strong>Telefono</strong>:&nbsp;011-5287-3817</p>
			<p><strong>Email</strong>:&nbsp;oncologia@lanari.uba.ar</p>
			<div class="alert alert-dark" role="alert">
				<h3>Presentación</h3>
				<p>El servicio de Oncología del&nbsp;IDIM&nbsp;se formó en la década del 80 en respuesta a los avances de la especialidad.</p>
				<p>Cuenta con un hospital de día para llevar a cabo los tratamientos más modernos de la actualidad ya sea quimioterápicos, inmunológicos, etc.</p>
				<p>Los tratamientos en los que se incluyen a los pacientes responden a los avances actuales de la ciencia con quimioterápicos, hormonas, agentes orientados contra blancos moleculares orales o inyectables.</p>
				<p>Los tratamientos radiantes se efectuan con convenios en centros asociados a la UBA.</p>
				<p>En el servicio se efectúan además tratamientos ambulatorios especiales de otros ser</p>vicios clínicos del&nbsp;IDIM&nbsp;como Inmunología,Nefrología,Neurología,Hematología y Clínica.</p>
			</div>
			<div class="alert alert-dark" role="alert">
				<h3>PLANTEL</h3>
				<ul class="lista">					
					<li><strong>Jefe Servicio: </strong> Dr. Rivero, Oscar Alejandro</li>
					<li><strong>Médicos:</strong> Dr. Juan Cundom, Dr. Gastón Zatta Cobos</li>
					<li><strong>Enfermera:</strong> Lic. Sofía Puca</li>
					<li><strong>Enfermero: </strong> Lic. Diego Enriquez</li>
					<li><strong>Secretaría:</strong> Daniela Solari</li>
				</ul>
			</div>
		<!-- Comienzo Acordeón -->
	<div class="accordion" id="accordionBasic">
	 <div class="accordion-item">
	    <h2 class="accordion-header" id="headingOne">
	      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
	        OBJETIVOS
	      </button>
	    </h2>
	    <div id="collapseOne" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionBasic">
	      <div class="accordion-body">
	        <ul class="lista">
	        	<li>Diagnóstico y estadificación de enfermedades oncológicas.</li>
	        	<li>Tratamiento de las mismas con los más modernos protocolos vigentes en la actualidad, en la mayoría de los casos en forma ambulatoria.</li>
	        	<li>Tratamiento integrado con los otros servicios del hospital.</li>
	        	<li>Seguimiento posterior al tratamiento por los distintos servicios del IIM que derivaron al paciente, para su mejor control individualizado.</li>
	        </ul>

	       </div>
	    </div>
	  </div>
	  <div class="accordion-item">
	    <h2 class="accordion-header" id="headingTwo">
	      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	       INFORMACIÓN PARA PACIENTES
	      </button>
	    </h2>
	    <div id="collapseTwo" class="accordion-collapse collapse hide" aria-labelledby="headingTwo" data-bs-parent="#accordionBasic">
	      <div class="accordion-body">
	      	<ul class="lista">
	      		<img src="../../../img/oncologia2.jpg" class="float-right">
	      		<li>Consultorio externo previo turno. Jueves por la mañana.</li>	
	      		<li>Todos los días se realizan los tratamientos ambulatorios con turno previo.</li>
	      		<li>Se realizan consultas de segunda opinión los días Jueves por la mañana previo turno.</li>
	      	</ul>
	        
	      </div>
	    </div>
	  </div>
	  <div class="accordion-item">
	    <h2 class="accordion-header" id="headingThree">
	      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	        RESIDENCIA
	      </button>
	    </h2>
	    <div id="collapseThree" class="accordion-collapse collapse hide" aria-labelledby="headingThree" data-bs-parent="#accordionBasic">
	      <div class="accordion-body">
	        <p>En el IDIM realizan el 1 año de residencia los médicos residentes de Oncología del <strong>Instituto Roffo UBA</strong>.</p>
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
<?php include("../../../template/footer.php"); ?>
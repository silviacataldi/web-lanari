<?php $title="Nefrología";
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
		<h2>DEPARTAMENTO DE NEFROLOGÍA Y TRANSPLANTE RENAL</h2>
		<h4>Contacto</h4>
		<p><strong>Ubicación</strong>:&nbsp;Primer Cuerpo, segundo piso</p>
		<p><strong>Telefono</strong>:&nbsp;011-5287-3787</p>
		<p><strong>Email</strong>:&nbsp;<a href="mailto:nefrologia@lanari.fmed.uba.ar">nefrologia@lanari.uba.ar</a></p>
		<!-- Comienzo Acordeón -->
	<div class="accordion" id="accordionBasic">
	 <div class="accordion-item">
	    <h2 class="accordion-header" id="headingOne">
	      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
	        PRESTACIONES
	      </button>
	    </h2>
	    <div id="collapseOne" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionBasic">
	      <div class="accordion-body">
	        <ul class="lista">
	        	<li>Hemodiálisis crónica.</li>
				<li>Hemodiálisis agudas</li>
				<li>Consultorio externo de nefrología clínica, trasplante renal y pre-trasplante renal</li>
	        </ul>
	       </div>
	    </div>
	  </div>
	  <div class="accordion-item">
	    <h2 class="accordion-header" id="headingTwo">
	      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	       PLANTEL
	      </button>
	    </h2>
	    <div id="collapseTwo" class="accordion-collapse collapse hide" aria-labelledby="headingTwo" data-bs-parent="#accordionBasic">
	      <div class="accordion-body">
	        <li>Jefe Departamento Nefrología: Dr. Enrique Dorado</li>
			<li>Director Médico de Diálisis: Dr. Enrique Dorado</li>
			<li>Jefe División Nefrología: Dr. Diego Ambrogetti</li>	
			<li>Médico Nefrólogo: Dr. Lautaro Moscón</li>
			<li>Medico de Planta: Maria Victoria Garcia Fernandez</li>
			<li>Concurrente: Zambrano León, Estefania Yadira</li>
			<li>Jefa Departamento Técnica en Hemodiálisis: Blanca de los Santos</li>
			<li>Jefa División Técnica en Hemodiálisis: Sonia Adriana Montini</li>
			<li>Técnica de Diálisis: Gladys Margarita Gonzalez</li>
			<li>Técnica de Diálisis: Mabel Lugones</li>
			<li>Técnica de Diálisis: Luisa lugones</li>
			<li>Técnico de Diálisis: Pablo Gibert</li>
			<li>Técnica de Diálisis: Rebeca Coronel</li>
			<li>Secretario Trasplante: Martín Carone</li>
			<li>Secretario Departamento de Nefrología Clínica: Martín Carone</li>
			<li>Servicios Generales: Luisa Lugones</li>
			<li>Asistente Social: Lic. Doly Amabil Rodriguez Scolny</li>
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
	        <p><strong>Primer año Residente: </strong>Dra. Natali Gonzalez </p>
	        <p><strong>Primer año carrerista: </strong>Dra María Florencia Sanchez Castellano </p>
	        <p><strong>Segundo año: </strong>Dra. Geogrina Martinez Tumiri </p>
	        <p><strong>Tercer año: </strong>Dr. Jorge Montenegro</p>
	        <p><strong>Segundo Año carrerista: </strong>Dra. Lucía Rosenberg </p>
	      </div>
	    </div>	    
	  </div>
	</div>
	<!-- Fin Acordeón -->
	</div>
		<div class="col-4">
		 	<?php include("menu.php"); ?>
		
		</div>

			
		</div>


		<!-- FIN MENÚ VERTICAL-->

	</div>
	</div>
</div>
<?php include("../../../template/footer.php"); ?>
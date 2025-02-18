<?php 
$title="Gastroenterología";
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
		<h2>GASTROENTEROLOGÍA</h2>			
		<h4>Contacto</h4>
		<p>Ubicación: Primer cuerpo, Planta Baja.</p>
		<p>Teléfono: 5287-3849</p>
		<p>Procedimiento de Turnos: Personalmente en secretaría de Gastroenterología.</p>
		<p>Email: <a href="mailto:gastroenterologia@lanari.uba.ar">gastroenterologia@lanari.uba.ar</a></p>
		<div class="alert alert-dark" role="alert">
			<h3>Plantel</h3>
			<p><strong>Jefe Departamento:</strong><span> </span>Laudanno, Oscar<br /><strong>Jefa División:</strong><span> </span>Sambresqui, Adrián Dario<br /><strong>Médico:</strong> Pucci Betiana<br /><strong>Médico:</strong> Lafage, Matías<br /><strong>Secretaria:</strong><span> </span>Ibañez Laura Mabel<br /><strong>Enfermera asistente de endoscopía:</strong><span> </span>Moreno Claudia Mariela<br /><strong>Enfermera Jefe Gastroenterología:</strong><span> </span>Burgos Alicia</p>
		</div>
		<p></p>
		<!-- Comienzo Acordeón -->
	<div class="accordion" id="accordionBasic">
	 <div class="accordion-item">
	    <h2 class="accordion-header" id="headingOne">
	      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
	        PROCEDIMIENTOS
	      </button>
	    </h2>
	    <div id="collapseOne" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionBasic">
	      <div class="accordion-body">	        
	      	<p><a href="../../../img/VIDEOCOLONOSCOPIA-VCC.pdf" target="_blank">VIDEOCOLONOSCOPIA (VCC)</a></p>
	      	<p><a href="../../../img/VIDEOENDOSCOPIA-DIGESTIVA-ALTA-VEDA.pdf" target="_blank">VIDEOENDOSCOPIA DIGESTIVA ALTA (VEDA)</a></p>
	      	<p><a href="../../../img/INSTRUCCIONES-AL-ALTA.pdf" target="_blank">INSTRUCCIONES AL ALTA</a></p>
	      </div>
	    </div>
	  </div>
	  <div class="accordion-item">
	    <h2 class="accordion-header" id="headingTwo">
	      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	       PREPARACIONES VIDEOCOLONOSCOPÍA
	      </button>
	    </h2>
	    <div id="collapseTwo" class="accordion-collapse collapse hide" aria-labelledby="headingTwo" data-bs-parent="#accordionBasic">
	      <div class="accordion-body">
	        <p><a href="../../../img/PREPARACION-BAREX-KIT-MAÑANA.pdf" type="_blank">PREPARACION BAREX KIT MAÑANA</a> </p>
	        <p><a href="../../../img/PREPARACION-FOSFACOL-2F-MAÑANA.pdf" target="_blank">PREPARACION FOSFACOL 2F MAÑANA</a> </p>
	        <p><a href="../../../img/PREPARACION-PICOPREP-MAÑANA.pdf" target="_blank">PREPARACION PICOPREP MAÑANA</a></p>
	      </div>
	    </div>
	  </div>
	  <div class="accordion-item">
	    <h2 class="accordion-header" id="headingThree">
	      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	        CONSENTIMIENTO INFORMADO
	      </button>
	    </h2>
	    <div id="collapseThree" class="accordion-collapse collapse hide" aria-labelledby="headingThree" data-bs-parent="#accordionBasic">
	      <div class="accordion-body">
	        <p>Cuando sea solicitado deberá imprimir el siguiente formulario y completarlo.</p>
	        <p><a href="../../../img/CONSENTIMIENTO-INFORMADO-PARA-PRACTICAS-O-PROCEDIMIENTOS.pdf">CONSENTIMIENTO INFORMADO PARA PRACTICAS O PROCEDIMIENTOS</a> </p>

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
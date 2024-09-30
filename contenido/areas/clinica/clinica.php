<?php 
	$title="Cínica Médica";
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
		<h2 class="text-xl-center text-primary">CLÍNICA MÉDICA</h2>
	<h3>Contacto</h3>
	<p><strong>Ubicaci&oacute;n</strong>: Primer Cuerpo, segundo piso</p>
	<p><strong>Telefono</strong>: 011-5287-3777</p>
	<p><strong>Email</strong>:&nbsp;<a href="clinica/mailto:clinicamedica@lanari.fmed.uba.ar">clinicamedica@lanari.uba.ar</a></p>
	<p></p>
	<div class="alert alert-dark" role="alert" id="PLANTEL">
	    <h3>PLANTEL</h3>
	    <ul class="lista">
		    <li><strong>Director Area Medica:</strong><span>&nbsp;</span>De Feo, Lucas Gustavo</li>
		    <li><strong>Jefe Departamento Salas Internaci&oacute;n:</strong><span>&nbsp;</span>Freue, Roberto Demian</li>
		    <li><strong>Jefe Departamento Unidad Terapia Intensiva:</strong><span>&nbsp;</span>Grinberg, Alejandro Ruben</li>
		    <li><strong>Jefe Divisi&oacute;n Salas de Internaci&oacute;n:</strong><span>&nbsp;</span>Landi, Pablo Jorge</li>
		    <li><strong>Jefe Divisi&oacute;n Salas de Internaci&oacute;n:</strong><span>&nbsp;</span>Suarez, Juan Pablo</li>
		    <li><strong>Medico de Planta:</strong><span>&nbsp;</span>Ludue&ntilde;a, Ana Valentina</li>
		    <li><strong>Medico de Planta:</strong><span>&nbsp;</span>Monti, Paula</li>
		    <li><strong>Medico de Planta UTI</strong>: L&oacute;pez Rodolfo</li>
		    <li><strong>Medico de Planta</strong>: Echavarria Gonzalo</li>
		    <li><strong>Medico de Planta</strong>: Solerno, Martin .R</li>
		</ul>
	</div>
	<div class="alert alert-dark" role="alert" id="RESIDENCIA">
	    <h3>RESIDENCIA</h3>
	    <ul class="lista">
	    	<li><strong>Jefe Residentes Medicina Interna:<span>&nbsp;</span></strong>Durlach, Mart&iacute;n y Smutny, Juan Pablo</li>
	    	<li><strong>Medico Residente 4&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Carla Donato</li>
	    	<li><strong>Medico Residente 4&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Daniela Carbone</li>
	    	<li><strong>Medico Residente 4&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Ana Salomon</li>
	    	<li><strong>Medico Residente 4&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Aaron Kim</li>
	    	<li><strong>Medico Residente 4&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Andres Ruhemann</li>
	    	<li><strong>Medico Residente 4&ordf; A&ntilde;o:</strong><span>&nbsp;</span>Constanza Galati</li>
	    	<li><strong>Medico Residente 4&ordf; A&ntilde;o:</strong><span>&nbsp;</span>Macarena Rosatti</li>
	    	<li><strong>Medico Residente 3&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Julio Cesar Rotondaro</li>
	    	<li><strong>Medico Residente 3&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Lucila Pensa</li>
	    	<li><strong>Medico Residente 3&ordf; A&ntilde;o:</strong><span>&nbsp;</span>Manuela Durruty</li>
	    	<li><strong>Medico Residente 3&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Victoria Gomez</li>
	    	<li><strong>Medico Residente 3&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Manuel Buhl</li>
	    	<li><strong>Medico Residente 3&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Laureano Kamiya</li>
	    	<li><strong>Medico Residente 2&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Carolina Holzer</li>
	    	<li><strong>Medico Residente 2&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Abril Baiocco</li>
	    	<li><strong>Medico Residente 2&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Camila Ustares</li>
	    	<li><strong>Medico Residente 2&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Gonzalo Voboril</li>
	    	<li><strong>Medico Residente 2&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Chritopher Dias</li>
	    	<li><strong>Medico Residente 2&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Sofia Militello</li>
	    	<li><strong>Medico Residente 2&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Gustavo Castro</li>
	    	<li><strong>Medico Residente 2&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Ana Luiza Perotto</li>
	    	<li><strong>Medico Residente 2&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Ivan Schwartz</li>
	    	<li><strong>Medico Residente 2&ordm; A&ntilde;o:</strong><span>&nbsp;</span>Juan Jose Martinez</li>
	    	<li><span><strong>M&eacute;dico Residente 1&ordm; A&ntilde;o:&nbsp;</strong>Robol, Dolore</span></li>
	    	<li><span><strong>M&eacute;dico Residente 1&ordm; A&ntilde;o:&nbsp;</strong></span>Montiel Lovaglio, Marcos</li>
	    	<li><span><strong>M&eacute;dico Residente 1&ordm; A&ntilde;o:&nbsp;</strong></span>Belachur, Gabriela Luz</li>
	    </ul>
	</div>
	<p></p>
	
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
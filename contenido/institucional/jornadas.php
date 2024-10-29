<?php 
$title= "Jornadas Científicas";
include("../../template/top.php");
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
    .tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
</style>
<div class="container margen">
<div class="row">
<div class="col-12">
	<img src="../../img/logo-jornadas-25.jpg"  class="float-left"> <h3 class="mt-5">JORNADAS CIENTÍFICAS DEL INSTITUTO LANARI</h3>
</div>
</div>
	<div class="d-flex align-items-start">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Misión</a>
    <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Historia</a>
    <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Jornadas 2025</a>
    <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Jornadas anteriores</a>
  </div>
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"> <!--Misión-->
   		 Las Jornadas Científicas del Instituto Lanari constituyen un espacio de encuentro en el que la comunidad de profesionales se reúne para compartir las conclusiones de las actividades profesionales más relevantes del año. Durante los 3 días en los que se llevan a cabo, se presentan trabajos científicos en las áreas de investigación clínica y básica, y casos clínicos de especial interés. También se desarrollan mesas redondas y conferencias sobre temas destacados en el área de salud y ciencias médicas, a cargo de expertos nacionales e internacionales.
	</div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"> <!--Historia-->
    	<h4>JORNADAS CIENTÍFICAS DEL INSTITUTO DE INVESTIGACIONES MÉDICAS ALFREDO LANARI – UBA</h4>
    	<p>Y todo comenz&oacute; all&aacute; por el 2000 &ndash; 2001, cuando algunos profesionales tomaron conciencia que en el Instituto se trabajaba mucho y muy bien, aunque pocos sab&iacute;an en qu&eacute; lo hac&iacute;an quienes actuaban en el &ldquo;edificio de enfrente&rdquo;, como se llamaba a los laboratorios especializados y de investigaci&oacute;n. Solo algunos de los que se desempe&ntilde;aban &ldquo;enfrente&rdquo; interactuaban frecuentemente con los m&eacute;dicos cl&iacute;nicos y participaban en los ateneos cl&iacute;nicos y an&aacute;tomo-patol&oacute;gicos.</p>
		<p>Esta escasa comunicaci&oacute;n hac&iacute;a que muchos de los valiosos trabajos que cada grupo presentaba en los congresos de las propias especialidades, fuesen totalmente desconocidos por el resto de los profesionales y, excepcionalmente, los cl&iacute;nicos participaban en proyectos compartidos.</p>
		<p>Fue as&iacute; que, preocupados por esta realidad, se comenz&oacute; a pensar c&oacute;mo se pod&iacute;a mejorar y lograr una mayor cooperaci&oacute;n e interacci&oacute;n, sobre todo en la actividad acad&eacute;mica la cual, sin duda, trascender&iacute;a hacia la labor asistencial en beneficio de los pacientes En principio, se intercambiaron opiniones en el &aacute;mbito de la Asociaci&oacute;n de Profesionales (APIIM), luego, con el resto de los profesionales del Instituto y sus autoridades, y se decidi&oacute; que era conveniente que peri&oacute;dicamente, cada grupo de trabajo en las distintas especialidades mostrara los<br />resultados, los avances en sus l&iacute;neas de investigaci&oacute;n y los hallazgos no habituales en las diferentes &aacute;reas que aportaran nuevos conocimientos en cuanto a diagn&oacute;sticos y tratamientos. Fue as&iacute; que, a trav&eacute;s de la APIIM, se proyectaron y concretaron las Primeras Jornadas Cient&iacute;ficas del Instituto de Investigaciones M&eacute;dicas Alfredo Lanari &ndash; UBA entre el 12 y 13 de septiembre de 2002. Actu&oacute; como presidente quien desempe&ntilde;aba ese cargo en la APIIM, la Dra. Patricia S. Vassallu.</p>
		<p>El evento cont&oacute; con un grupo de coordinadores, constituido por los jefes o directores de las distintas &aacute;reas de la instituci&oacute;n y un jurado de cuatro miembros para la evaluaci&oacute;n y entrega de los dos premios en investigaci&oacute;n b&aacute;sica o cl&iacute;nica, que se hab&iacute;an establecido. Se presentaron 47 trabajos en forma de posters, todos fueron expuestos por uno de los autores y discutidos por los presentes en las recorridas lideradas por quienes hab&iacute;an sido designados previamente. Tambi&eacute;n hubo cuatro presentaciones orales entre las que figuraron los trabajos ganadores de los dos premios instaurados en aquel momento. Qued&oacute; claramente establecido que pod&iacute;an optar a premio todos los trabajos que, si bien pudieron haberse presentado en otras reuniones cient&iacute;ficas nacionales o internacionales, nunca hubiesen ganado un premio. El resultado de estas primeras jornadas fue muy alentador y enriquecedor, con gran intercambio de opiniones y conocimientos.</p>
		<p>Se organizaron las Muestras de Arte y Creatividad a cargo, casi siempre, de las Dras. Adriana N. De Paulis y Luj&aacute;n EM Cardoso, con la colaboraci&oacute;n de las Dras. Paula Galv&aacute;n y Rosana Marta, en las cuales, todos los miembros del Instituto eran invitados a mostrar sus habilidades y formas de expresi&oacute;n art&iacute;stica. Adem&aacute;s, distintos laboratorios de la Industria Farmac&eacute;utica y empresas relacionadas con la provisi&oacute;n de insumos y tecnolog&iacute;a comenzaron a colaborar, tales como Astra Zeneca, Balliarda, Bernab&oacute;, Biodynamiccs SRL, Bristol-Myers Squibb, Britania, Pablo Casar&aacute;, Covidien, Editora e Impresora BM Press, Elea, Geodigital Group SRL, Glaxo Smith Kline, Guilmont Farmac&eacute;utica SA, Mildrivers, Novartis SA, Novo Nordisk Pharma Argentina SA, Pfizer, Qu&iacute;mica Montpellier, Roche, Roemmers, Sistemas Anal&iacute;ticos SA, Tecnolab SA y V. Tokatlian. Tambi&eacute;n se cont&oacute; con los auspicios del Ministerio de Ciencia, Tecnolog&iacute;a e Innovaci&oacute;n Cient&iacute;fica (luego denominado Ministerio de Ciencia, Tecnolog&iacute;a e Innovaci&oacute;n Productiva y a posteriori Ministerio de Ciencia Tecnolog&iacute;a e Innovaci&oacute;n), del Ministerio de Salud, del Consejo Nacional de Investigaciones Cient&iacute;ficas y T&eacute;cnicas, de la Facultad de Medicina de la Universidad de Buenos Aires y de la Asociaci&oacute;n Argentina de<br />Microbiolog&iacute;a.</p>
		<p>Todos quedaron entusiasmados para continuarlas a futuro, cosa que afortunadamente sucedi&oacute;. Hasta 2014 la periodicidad fue anual, luego bienal, salvo durante la pandemia. Con el transcurrir del tiempo la organizaci&oacute;n de las jornadas se fue perfeccionando y &eacute;stas ganaron prestigio. A partir de 2009 se organizaron en forma conjunta entre la APIIM y el Comit&eacute; de Docencia e Investigaci&oacute;n. En 2010 se cre&oacute; un Comit&eacute; Organizador de las Jornadas Cient&iacute;ficas constituido por los representantes de las distintas &aacute;reas del Instituto. Se establecieron requisitos m&aacute;s<br />rigurosos para la presentaci&oacute;n de los proyectos de los que surgir&iacute;an los res&uacute;menes a ser presentados. Deb&iacute;an ser aprobados por los Comit&eacute;s de Docencia e Investigaci&oacute;n y de &Eacute;tica/CICUAL, seg&uacute;n correspondiera. Se establecieron premios destinados a la investigaci&oacute;n b&aacute;sica, la investigaci&oacute;n cl&iacute;nica y al est&iacute;mulo a la investigaci&oacute;n. A partir de 2016 hubo una menci&oacute;n al caso cl&iacute;nico destacado. Se dictaron conferencias a cargo de especialistas en distintos temas, por lo general invitados de otras instituciones.</p>
		<p>Los sucesivos presidentes de las Jornadas Cient&iacute;ficas fueron los Dres. Patricia S. Vassallu (2003), Daniel Rimoldi (2004 y 2005), Norberto Laf&oacute;s (2006 y2007), Miguel &Aacute;ngel Guti&eacute;rrez (2008), Elisabet Oddo (2009), Carlos J. Pirola (2010), Basilio A. Kotsias (2011), Adriana S. Losavio (2012), Silvia C. Predari<br />(2013), Paula Heller (2014), Judith Sarano (2016), Silvia I. Garc&iacute;a (2018) y Alejandro R. Grinberg (2021).</p>
		<p>En cada una de las jornadas se presentaron los resultados de los trabajos cient&iacute;ficos de los distintos grupos, ya sea en la modalidad de posters o presentaciones orales y en un n&uacute;mero promedio de 58/a&ntilde;o, rango de 33/a&ntilde;o a 99/a&ntilde;o.</p>
		<p>Cada evento finalizaba con un Brindis de Camarader&iacute;a y un Espect&aacute;culo Art&iacute;stico-Musical. Se presentaron el Coro de la Facultad de Medicina de la UBA, los alumnos de la Escuela de M&uacute;sica Juan Pedro Esnaola, el Grupo Musema, Guedalina Lichtenstein &ldquo;Gueda y sus mu&ntilde;ecos&rdquo;, el Grupo Vocal Vox Animae, el Dr.Jorge Hevia y el Dr. Lautaro Mosc&oacute;n ofrecieron conciertos de piano, el Dr. Oscar Rivero cant&oacute; acompa&ntilde;ado por su grupo musical, entre otros.</p>
		<p>Las Jornadas Cient&iacute;ficas nacieron por la inquietud de unos pocos, crecieron por el accionar de muchos y se consolidaron por la voluntad, participaci&oacute;n y trabajo de todos los integrantes de la instituci&oacute;n, es decir, de los profesionales, los no profesionales, los miembros de los Servicios Generales y de Mantenimiento y hasta de los alumnos. Todos mancomunados trabajaron con respeto, amor y dedicaci&oacute;n, lo cual garantiz&oacute; siempre el &eacute;xito de las mismas.</p>
		<p>Las pr&oacute;ximas Jornadas Cient&iacute;ficas del Instituto de Investigaciones M&eacute;dicas Alfredo Lanari &ndash; UBA se realizar&aacute;n en noviembre de 2023, con la presidencia de la Dra. Rosana F. Marta.</p>
		<p>Lo nuevo que surge debe servir no solo para mejorar, sino para transformar la realidad.</p>
		<p>Que as&iacute; sea&hellip;</p>
		<p><strong>Silvia Carla Predari</strong><br /><strong>Exjefe del Departamento de Microbiolog&iacute;a</strong><br /><strong>Expresidente del Comit&eacute; de Docencia e Investigaci&oacute;n</strong><br /><strong>Expresidente de la APIIMAL</strong></p>
    </div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"><!--Jornadas 2023-->
        <div class="row">
            <div class="col-lg-10">
                    <h4>Jornadas Científicas XVIII 2025</h4>
                    <h5>Comité Organizador</h5>
                    <p> <strong>Presidenta:</strong> Ana Ludueña</p>
                    <p><strong>Vice- Presidenta:</strong> María Fernanda Rubio</p>
                    <p><strong>Secretaria:</strong> Melisa Martínez Sayé</p>
                    <p><strong>Tesorero:</strong> Diego Ambrogetti</p>
                    <p><strong>Vocales:</strong> </p>
            <!-- Sigue en "resto" -->
                    
                   

                      
            </div>    
            <div class="col-lg-2">
                        <!-- BOTONES DE LIBRO DE RESUMEN Y PROGRAMA FINAL. OCULTOS HASTA TENER MATERIAL
                            <p><a href="/include/docs/Libro_XVII_Jornadas_Cientificas_IDIM_2023.pdf" target="_blank" class="btn btn-primary btn-sm">Libro de Resúmenes</a></p>
                            <p><a href="/include/docs/Programa_científico.pdf" target="_blank" class="btn btn-primary btn-sm">Programa Final</a></p>
                        -->    
                            
            </div>
        </div>
        <!-- Resto -->
        <div class="row">
            <div class="col-lg-4">
                <p>Gustavo Balacco</p>
                <p>Dolores Clifton</p> 
                <p>Juan Cundom</p>
                <p>Adriana De Paulis</p>
            </div>
            <div class="col-lg-4">
                <p>Martín Durlach</p>
                <p>Nicolás Iezzi</p>
                <p>Mariana Miranda</p>
                <p>M. Lucía Rosenberg </p>
                
            </div>
        <div class="row">
            <div class="text-center col-lg-8"><p>Victoria Santa María</p></div>
        </div>
        </div>
        
    </div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"><!--Jornadas anteriores-->
        <h4 class="text-center">Seleccione un año para ver más información</h4>
    	<img src="../../img/linea-tiempo.png" class="text-center" usemap="#mapa">
        <map id="mapa">
            <area shape="circle" coords="387, 230, 30" href="jornadas/2005-programa.pdf" target="_blank" data-toggle="tooltip" data-placement="top" title="2005 IV Jornadas - Programa">
            <area shape="circle" coords="576, 230, 30" href="jornadas/2007-programa.pdf" target="_blank" data-toggle="tooltip" data-placement="top" title="2007 VI Jornadas - Programa">
            <area shape="circle" coords="666, 230, 30" href="jornadas/2008-resumenes.pdf" target="_blank" data-toggle="tooltip" data-placement="top" title="2008 VII Jornadas - Libro de resumenes"> 
            <area shape="circle" coords="848, 230, 30" href="jornadas/2010-resumenes.pdf" target="_blank" data-toggle="tooltip" data-placement="top" title="2010 IX Jornadas - Libro de resumenes">
            <area shape="circle" coords="165, 513, 30" href="jornadas/2011-resumenes.pdf" target="_blank" data-toggle="tooltip" data-placement="top" title="2011 X Jornadas - Libro de resumenes">
            <area shape="circle" coords="257, 513, 30" href="jornadas/2012-resumenes.pdf" target="_blank" data-toggle="tooltip" data-placement="top" title="2012 XI Jornadas - Libro de resumenes">
            <area shape="circle" coords="347, 513, 30" href="jornadas/2013-resumenes.pdf" target="_blank" data-toggle="tooltip" data-placement="top" title="2013 XII Jornadas - Libro de resumenes">
            <area shape="circle" coords="437, 513 30" href="jornadas/2014-resumenes.pdf" target="_blank" data-toggle="tooltip" data-placement="top" title="2014 XIII Jornadas - Libro de resumenes">
            <area shape="circle" coords="623, 513, 30" href="jornadas/2018-resumenes.pdf" target="_blank" data-toggle="tooltip" data-placement="top" title="2018 XV Jornadas - Libro de resumenes">
            <area shape="circle" coords="716, 513, 30" href="jornadas/2021-resumenes.pdf" target="_blank" data-toggle="tooltip" data-placement="top" title="2021 XVI Jornadas - Libro de resumenes">
            <area shape="circle" coords="806, 513, 30" href="jornadas/2023-resumenes.pdf" target="_blank" data-toggle="tooltip" data-placement="top" title="2023 XVII Jornadas - Libro de resumenes">
        </map>
    </div>
   
  </div>
</div>
</div>
<?php include("../../template/footer.php"); ?>
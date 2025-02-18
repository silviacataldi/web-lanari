<?php $title=" Residencia Bioquímica";
require("../../template/top.php"); ?>
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
		<div class="col-12">
            <h2>
                <?php echo $title; ?>
            </h2>
            
        </div>
        <!-- Comienzo Acordeón -->
            <div class="accordion" id="accordionBasic">
             <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    ROTACIONES
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionBasic">
                  <div class="accordion-body">
                    <ul class="lista">
                        <li>Laboratorio del Paciente Crítico y Gases en Sangre</li>
                        <li>Química clínica</li>
                        <li>Enzimología Clínica</li>
                        <li>Hematología Clínica</li>
                        <li>Hematología experimental</li>
                        <li>Microbiología</li>
                        <li>Endocrinología</li>
                        <li>Histocompatibilidad e Inmunogenética</li>
                        <li>Metabolismo y Nutrición</li>
                        <li>Inmunología</li>
                        <li>Inmunología de la patología infecciosa</li>
                        <li>Parasitología</li>
                        <li>Hemostasia</li>
                        <li>Proteínas plasmáticas</li>
                        <li>Citometría de flujo</li>
                        <li>Biología molecular</li>
                        <li>Rotación final a elección del residente</li>
                    </ul>
                   </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                   LISTADO DE RESIDENTES BIOQUÍMICOS
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse hide" aria-labelledby="headingTwo" data-bs-parent="#accordionBasic">
                  <div class="accordion-body">
                    <ul class="lista">
                        <li>Estefania Paparatto 2021</li>
                        <li>Mariana Vallejo 2021</li>
                        <li>Senin, Vanesa Solange 2020</li>
                        <li>Murdoch, Lucila Daniela 2020</li>
                        <li>Volpatti Sabrina 2019</li>
                        <li>Almirón Araoz de Lamadrid Juliana Paula 2019</li>
                        <li>Ivana Martinez 2018</li>
                        <li>Agustina Levalle 2018</li>
                        <li>Cristian Mercado 2017</li>
                        <li>Carla Tissot 2017</li>
                        <li>Melisa Fernandez 2016 *</li>
                        <li>Natalia Pezzi 2016</li>
                        <li>Maria Cristina de Franceschi 2015</li>
                        <li>Natalia Alejandra Mangieri 2015</li>
                        <li>Luciana Gualco 2014</li>
                        <li>* Mónica Lovera 2014</li>
                        <li>Soledad Cellucci 2013*</li>
                        <li>Matías Baremboin 2013</li>
                        <li>Celía Alejandro 2012*</li>
                        <li>D’ Elía Analia 2012</li>
                        <li>Daiana Guevara Nuñez 2011 *</li>
                        <li>Renzo Fabián Danti 2011</li>
                        <li>Marín Cecilia 2010</li>
                        <li>Guevara Darío 2010 *</li>
                        <li>Gotta Gabriela 2009 *</li>
                        <li>Fernandez Diego 2009</li>
                        <li>Cabrerizo Romina 2008 *</li>
                        <li>Flores Andrea 2008</li>
                        <li>Loi Mariana 2007 *</li>
                        <li>Savietto Valeria 2007</li>
                        <li>Guiñazú Karina Emilce 2006 *</li>
                        <li>De la Vega Gonzalo 2006</li>
                        <li>Canitano Flavia 2005 *</li>
                        <li>Coniglio Sofía 2005</li>
                        <li>Manginelli Yanella 2004 *</li>
                        <li>Faixas María Laura 2004</li>
                        <li>Diez Solange 2003 *</li>
                        <li>Fernandez Carolina 2003</li>
                        <li>Strada Agodino María Laura 2002 *</li>
                        <li>Fiezzoni Karina 2001</li>
                        <li>Martinelli Ivana 2001 *</li>
                        <li>Galarza Pablo 2001</li>
                        <li>Salim Juan Pablo 2000 *</li>
                        <li>Chazarretta Daniel 2000</li>
                        <li>Diana Paula Ortiz de Zárate 1999*</li>
                        <li>Muchnik Carolina 1998</li>
                        <li>Molinari Judith 1998</li>
                        <li>Glembotsky Ana 1997</li>
                        <li>Céspedes Verónica 1997</li>
                        <li>Fabbro Dolores 1996</li>
                        <li>Goette Nora 1996</li>
                        <li>Gargiulo Angeles 1995</li>
                        <li>Leonardi Fabiana 1995</li>
                        <li>Indaburu Patricia 1994 **</li>
                        <li>Bussy Verónica 1994</li>
                        <li>Correa Gabriel 1993</li>
                        <li>Alonso Mónica 1993</li>
                        <li>Alvarez Mónica 1992</li>
                        <li>Ofner Luis 1992</li>
                        <li>Morosi Graciela 1991</li>
                        <li>Vilches Viviana 1991</li>
                        <li>Pato Cecilia 1990</li>
                        <li>Scigliotti Sandra 1990 **</li>
                        <li>Sand Guillermina 1989</li>
                        <li>Cerretini Rosana 1989</li>
                        <li>Heller Verónica 1989</li>
                        <li>Gutman Javier 1989</li>
                        <li>Lopez Alicia 1987</li>
                        <li>Lazaro Ana M 1987</li>
                        <li>Valdez Graciela 1986 **</li>
                        <li>Stumpo Rita 1986</li>
                        <li>Lanza Marìa Alejandra 1985</li>
                        <li>Sganzetta Norma I. 1985</li>
                    </ul>
                    * Jefes de Residentes
                    ** Coordinadores Actividades Residencia Bioquímica
                  </div>
                </div>
              </div>
              
            <!-- Fin Acordeón -->
            <p></p>
		<a href="/include/docs/programa-residencia-Bioq-2023.pdf" href="_blank">Descargar Programa de Residencia Bioquímica</a>
        <p></p>
	</div>
</div>

<?php include("../../template/footer.php"); ?><?php $title="";?>

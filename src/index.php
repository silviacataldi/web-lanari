<?php

$title = "Home";
require("template/top.php");

?>
<!doctype html>
<head>
    
<style>
    .margen {  
        margin-left: 10% ;
        margin-right: 30%;
        margin-bottom: 40px;
    }
    .accordion-button{
        color: #fff;
        background-color: #0D6EFD;
    }
     /* Estilos CSS para cartel */
    #overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      color: white;
      padding: 15px;
      text-align: center;
      z-index: 1000; /* Asegúrate de que esté por encima de otros elementos */
      display: none; /* Oculto por defecto */
      animation: slideDown 0.5s ease forwards; /* Animación de entrada */
    }

    @keyframes slideDown {
      from { transform: translateY(-100%); }
      to { transform: translateY(0); }
    }
</style>
</head>
<!-- Header-->
    <header class="py-5 bg-image-full" style="background-image: url('img/instituto-lanari.jpg')">
            <div class="text-center my-5">
                <h1 class="text-white fs-3 fw-bolder csombra"><span style="text-shadow: 1px 1px #333;">Instituto de Investigaciones Médicas <br/>Alfredo Lanari</h1></span>
            </div>
        </header>
<!-- Fin Header-->

<div class="row">
        <div class="col-6"><!-- Esta columna debe contener las Novedades -->
           <div class="card">              
                <div class="card-header"><h1 class="text-center">Novedades </h1></div>
                <div class="card-body">
  <!-- Imagen de consultorio de Endocrino experimental -->                  
                    <div class="alert alert-info" role="alert">
                      <img src="img/endocrinologiaexp.jpg" alt="Consultorio Poliquistosis Renal" class="img-fluid">
                    </div>
  <!--imagen de Consultorio poliquistosis Renal -->
                    <div class="alert alert-info" role="alert">
                      <img src="img/hiper-arterial.png" alt="Consultorio Poliquistosis Renal" class="img-fluid">
                    </div>
  <!-- Noticia del ecógrafo con foto de directores -->
                    <div class="title"><h3 class="text-muted">Entrega de Ecógrafo al Instituto Lanari </h3></div>
                    <img src="img/ecografo.jpeg" class="float-left w-25 p-3">
                    <p>El <strong>Instituto Lanari</strong> de la Universidad de Buenos Aires cuenta ahora con un nuevo ecógrafo, cortesía del compromiso social de <strong>Banco Galicia</strong>. Con esta inversión contribuímos a mejorar el día a día de más personas.</p>
                    <img src="img/ecografo2.jpeg" class="float-right w-50 p-3">
                    <p>El impacto es directo en todos los pacientes, mejorando la precisión de diagnósticos y acelerando los procesos para un cuidado más efectivo. Agradecemos a todos los que hicieron posible esta entrega y a nuestros colaboradores y clientes por confiar en proyectos que hacen la diferencia.<br>@BancoGalicia #Sustentabilidad #InversiónSocial #SaludParaTodos</p>
                    <p>
                        
                        
                    </p>

                    
                  
                </div>
           </div> 
           
  
             
        </div>
        
    <div class="col-6"><!-- Esta columna debe contener las autoridades y si hay "turnos" -->
            <div class="card">
                <div class="card-header"><h1 class="text-center">Autoridades </h1></div>
                
                <div class="card-body">
                    
                    <p class="lead"><strong>Director: </strong>Dr. Norberto Lafos</p>
                    <p class="lead"><strong>Subdirector: </strong>Dr. Gonzalo Battaglia</p>
                </div>
            </div>

        <!-- Comienzo Acordeón -->
            <div class="accordion" id="accordionBasic">
                 <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Autoridades Hospitalarias
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionBasic">
                      <div class="accordion-body">
                        <p><strong>Director Docencia e Investigación: </strong> Dr. Roberto Freue</p>

                        <p><strong>Director Área Clínica Médica:</strong> Dr. Lucas Gustavo De Feo</p>

                        <p><strong>Director Área Consultorio Externo:</strong> Dr. Gustavo Carro</p>

                        <p><strong>Director Área Quirúrgica :</strong> Dr. Alejandro Giunippero</p>

                        <p><strong>Director Área Diagnóstico por Imágenes:</strong> Dra. Eliana Morresi</p>

                        <p><strong>Directora Área Diagnóstico Bioquímico:</strong> Dra. Gabriela Estrada</p>

                        <p><strong>Director de Enfermería:</strong> Lic. Tulio Alberto Cardich</p>
                       </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Autoridades Administrativas
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse hide" aria-labelledby="headingTwo" data-bs-parent="#accordionBasic">
                      <div class="accordion-body">
                        <p><strong>Secretario de Administración:</strong> Dr. Nicolás Daponte</p>
                        <p><strong>Subsecretaria de Administración:</strong> Dra. María del Carmen Mo</p>
                        <p><strong>Directora Gral. de administración Interina Directora del Área<br> Económico Financiera y Patrimonio:</strong> Sra. Elisabeth Goio</p>
                        <p><strong>Directora de Admisión de Pacientes:</strong> Sra. María Alejandra Di Renzo</p>
                        <p><strong>Director Interino de Compras:</strong> Sr. Fernando Vazquez</p>
                        <p><strong>Directora de RR.HH.:</strong> Sra. Mónica Gentile</p>
                        <p><strong>Directora de Tesorería:</strong> Sra. Silvia Pineau</p>
                        <p><strong>Director de Gestión de Sistemas Hospitalarios y de Auditoría:</strong> Dr. Ricardo Franzozi</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Autoridades del CONICET
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse hide" aria-labelledby="headingThree" data-bs-parent="#accordionBasic">
                      <div class="accordion-body">
                        <p><strong>Directora de la Unidad Ejecutora IDIM-CONICET:</strong> Dra. Mónica Costas</p>
                      </div>
                    </div>
                  </div>
            </div>
            <!-- Fin Acordeón -->
            <div class="card">                  
                 <div class="card-body">
                 <!-- lo que sigue es el calendario de turnos  -->
                     <p>
                        <img src="img/turnos-febrero.png" width="100%">
                     </p>   
                 </div>
            </div>  
    </div>           
            
</div>
        
     
<div class="row">
    
</div>
<!--mapa-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.7582228356223!2d-58.474675685164975!3d-34.58498378046436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb60d16378e89%3A0x8218711bc8d88523!2sCombatientes%20de%20Malvinas%203150%2C%20C1427ARN%20CABA!5e0!3m2!1ses-419!2sar!4v1675357330733!5m2!1ses-419!2sar" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<?php include("template/footer.php"); ?>
</html>
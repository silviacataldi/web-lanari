<?php $title="Rotantes";
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
            <h4 >CIRCUITO PARA LA INCORPORACIÓN DE LOS ASPIRANTES PARA ROTACIÓN EN EL IDIM</h4>
            <ul class="lista">
                <li>El Rotante presenta una nota al Jefe del Servicio en el cual desea rotar
                <li>El Jefe del Servicio eleva la nota con la documentación requerida por el Comité de Docencia e  Investigación al Director del Área (consta en página web) para su consideración.
                <li>El Director del Área aprueba o no la rotación
                <li>Si no la aprueba pasa nuevamente al Jefe de Servicio 
                <li>El Jefe de Servicio notifica al Rotante
                <li>Si la aprueba pasa a Mesa de entradas (se abre un TRI-UBA) para consideración del Comité de  Docencia e Investigación 
                <li>El Comité la evalúa y envía la respuesta a Mesa de Entradas (Aprueba o no aprueba)
                <li>Mesa de Entradas Notifica a la Dirección de Personal 
                <li>Personal notifica al Jefe de Servicio
                <li>El Jefe de Servicio notifica al Rotant
            </ul>
            <div class="text-center">
                <img src="/img/rotantes.png" alt="Circuito Incorporación de Rotantes">
                <a href="/include/docs/instructivo_incorporacion_rotantes.pdf" target="_blank" class="btn btn-primary btn-lg btn-block">Descargar PDF</a>
            </div>
        </div>         
        

    </div>
   
    
</div>

<?php include("../../template/footer.php"); ?><?php $title="";?>


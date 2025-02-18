<?php $title="Solicitud de Licencias";
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
            <h2 class="text-xl-center text-primary">
                <?php echo $title; ?>
            </h2>
            <p><strong>Descargue aquí las Solicitudes de Licencias correspondientes.</strong></p>
            <a href="/include/docs/Planilla-Solicitud-de-Licencias.pdf" target="_blank" class="btn btn-primary btn-lg btn-block">Descargar PDF</a>
        </div>

           
		

	</div>
    <!-- 

        <div class="text-center"><img src="/img/proximamente.jpg" width="600" height="293" alt="Página en Construcción"></div>
     -->
    
</div>

<?php include("../../template/footer.php"); ?><?php $title="";?>

<?php $title="Residencia de Cirugía";
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
        <h4>RESIDENTES CIRUGÍA GENERAL</h4>		
        <p>
            <strong>Jefe de Residentes:</strong> Dr. ESCUDERO SEPULVEDA, Andrés Felipe
        </p>
       <p>
           <strong> Medico Residente 4º Año: </strong> Tartaglia, María Luz
       </p>
       <p>
           <strong>Medico Residente 3º Año:</strong> Taleb, Ma. Belén
       </p> 

	</div>
</div>

<?php include("../../template/footer.php"); ?>

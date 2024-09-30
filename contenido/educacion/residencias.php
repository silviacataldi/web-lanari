<?php 
	$title="Residencias";
	require("../../template/top.php");
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
<h2 class="text-xl-center text-primary">RESIDENCIAS</h2>
	<div class="row">
		<div class="col-8">			
	
			<img src="../../img/residentes.jpg" width="100%">
		</div>
		<div class="col-4">
						<?php include("menu.php"); ?>
		
		</div>

			
		</div>


		<!-- FIN MENÚ VERTICAL-->

	</div>
	</div>
</div>
<?php include("../../template/footer.php"); ?>
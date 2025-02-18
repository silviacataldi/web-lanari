<?php $title="Titulo";
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
                
            </div>
            

    </div>
       
</div>

<?php include("../../template/footer.php"); ?><?php $title="";?>
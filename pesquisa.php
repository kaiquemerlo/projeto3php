<?php require_once"inc/header.php";?>
<?php require_once"conexaoDB.php";?>
<?php require_once"funcoes.php";?>


<div class="col-xs-12 col-sm-12 col-md-12" id="box">
        <div class="col-xs-12 col-sm-12 col-md-12" >
            <h2>Pesquisa:</h2>
		        <div class="col-xs-12 col-sm-6 col-md-12" style="margin:0 auto; border:1px solid #666;">
		           
					<?php 
						$pagina = $_POST['pesquisa'];
						exibeResultados($pagina);
					?>

		        </div>		        
    	</div>

	</div>




<?php require_once"inc/footer.php"; ?>
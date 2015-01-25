<?php require_once'inc/header.php'; ?>
    <div class="col-xs-12 col-sm-12 col-md-12" id="box">
        <div class="col-xs-12 col-sm-12 col-md-12" >
            <h2>Entre em contato conosco:</h2>
		        <div class="col-xs-12 col-sm-6 col-md-12" style="background:black; color:#FFF; text-align:center; margin:0 auto;">
		           
					<?php 
						$nome = $_GET['nome'];
						$email = $_GET['email'];
						$assunto = $_GET['assunto'];
						$mensagem = $_GET['mensagem'];


						if(!empty($nome) && !empty($email) && !empty($assunto) && !empty($mensagem)){
					?>

					<p class="alert alert-success" style="margin:10px 0;">Os dados foram enviados com sucesso!</p>

					Nome: <?= $nome; ?> <br>
					Email: <?= $email; ?> <br>
					Assunto: <?= $assunto; ?> <br>
					Mensagem: <?= $mensagem; ?> <br>
					
					<?php }else{ ?>

					<p class="alert alert-danger" style="margin:10px 0;">Por favor, preencha todos os campos!</p>
					
					<?php } ?>

		        </div>		        
    	</div>

	</div>
<?php require_once'inc/footer.php'; ?>
?php require_once'inc/header.php'; ?>
    <div class="col-xs-12 col-sm-12 col-md-12" id="box">
        <div class="col-xs-12 col-sm-12 col-md-12" >
            <h2>Entre em contato conosco:</h2>
		        <div class="col-xs-12 col-sm-6 col-md-12" style="background:black; color:#FFF; text-align:center; margin:0 auto;">
		           
					<form class="form form-vertical" action="enviado.php" method="get" >

						<div class="form-group">
							<label>
								Nome*:
								<input type="text" class="form-control" name="nome" />
							</label>
						</div>

						<div class="form-group">
							<label>
								Email*:
								<input type="text" class="form-control" name="email" />
							</label>
						</div>

						<div class="form-group">
							<label>
								Assunto*:
								<input type="text" class="form-control" name="assunto" />
							</label>
						</div>

						<div class="form-group">
							<label>
								Mensagem*:
								<textarea class="form-control" name="mensagem"> </textarea>
							</label>
						</div>

						<div class="form-group">
							<button class="btn btn-sm btn-primary" type="submit" name="enviar">Enviar</button>
							<button class="btn btn-sm btn-danger" type="button" name="cancelar">Cancelar</button>
						</div>

					</form>

		        </div>		        
    	</div>

	</div>
<?php require_once'inc/footer.php'; ?>
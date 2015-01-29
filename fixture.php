<?php 

require_once 'conexaoDB.php';


$conecta = conexaoDB(); // ta vindo no require



//DELETANDO OS DADOS DA 
echo "DELETANDO! <br>";
$conecta->query("DROP TABLE IF EXISTS paginas");
echo "/\OK/\\<br>";

echo "CRIANDO TABELA FIXTURE COM MESMOS CAMPOS!<br>";
$conecta->query("CREATE TABLE paginas(
	id INT NOT NULL AUTO_INCREMENT,
	titulo VARCHAR(255),
	pagina VARCHAR(255),
	conteudo TEXT,
	PRIMARY KEY (id)
	);	
");
echo "/\OK/\\<br>";



echo "INSERINDO OS DADOS NA TABELA<br>";


$nomes_paginas = array(
	1=>"home",
	2=>"empresa",
	3=>"produtos",
	4=>"servicos",
	5=>"contato",
	6=>"erro"
);

$titulo_paginas = array(
	1=>"Aqui você encontra as melhores marcas:",
	2=>"Sobre nós:",
	3=>"Veja alguns de nossos produtos:",
	4=>"Nossos serviços:",
	5=>"Entre em contato conosco:",
	6=>"ERRO 404, A PÁGINA NÃO FOI ENCONTRADA!"

);



$conteudo_paginas = array(
	1=>'<div class="col-xs-12 col-sm-12 col-md-12" id="box">
                        <div class="col-xs-12 col-sm-12 col-md-12" >
                        <h2>Aqui você encontra as melhores marcas:</h2>
                        <div class="col-xs-12 col-sm-6 col-md-2">
                            <img src="imagens/Quiksilver.png" width="190">
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
                            <img src="imagens/rip-curl-logo.png" width="190">
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
                            <img src="imagens/billabong-logo-2.jpg" width="190">
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
                            <img src="imagens/hurley.png" width="190">
                        </div>
                          
                        
                        </div>
                    </div>  

                    <div class="col-xs-12 col-sm-12 col-md-12" id="box2">

                        <div class="col-xs-12 col-sm-12 col-md-12" >
                        <h2>Venha conhecer nossa loja:</h2>

                        <div class="col-xs-12 col-sm-6 col-md-36">                         
                            <img src="imagens/loja.jpg" width="650" style="opacity:1; float:left;" />
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6" style="background:black">
                            <ul id="lista_end" >
                                <li>
                                    <h3>Endereço:</h3>
                                </li>
                                <li>                                    
                                    <address>
                                        <strong>Rua</strong>: Avenida Sérgio Trevisan / São Paulo<br>
                                        <strong><abbr title="Numéro da casa">N°</abbr></strong>: 327<br>
                                        <strong><abbr title="Telefone">Telefone</abbr></strong>: 11 4930-1715
                                    </address>
                                </li>
                                <li>Funcionamento:
                                    <ul>
                                        <li>Segunda a Sexta: 09:00 as 18:00</li>
                                        <li>Sábado: 09:00 as 13:00</li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                        </div> 
                    </div><!--box 2-->      
',


	2=>'<div class="col-xs-12 col-sm-12 col-md-12" id="box">

                        <div class="col-xs-12 col-sm-12 col-md-12" >
                        <h2>Sobre nós:</h2>

                        <div class="col-xs-12 col-sm-6 col-md-36">                         
                            <img src="imagens/loja.jpg" width="650" style="opacity:1; float:left;" />
                        </div>

                        

                        <div class="col-xs-12 col-sm-6 col-md-6" style="background:gray">
                            <ul id="lista_end" >
                                <li>
                                    <h3>Histórico:</h3>
                                </li>
                                <li>
                                    <p>Há 30 anos o sonho de um apaixonado por surf e skate se tornava realidade. Em 1984 nasceu a Loja Trópico, marca fundada por dois casais que perceberam o surgimento de um novo lifestyle no Brasil. A primeira unidade ficava na Rua 24 de Outubro, no bairro Moinhos de Vento, em Porto Alegre, local que na época concentrava todas as lojas do segmento na cidade
A indústria do surfwear e skatewear foi se profissionalizando no país, o esporte e o estilo do surf e do skate passaram a indicar atitude de, qualidade de vida, saúde, divertimento, alegria e natureza. Assim, em 1990 a Trópico abre a sua segunda unidade, no mesmo bairro, em Porto Alegre. Em 1993 veio a primeira loja em Shopping Center e a moda das pranchas e dos acessórios surf e skate se tornava referência de beleza, estilo e atitude.
Em 1996 a marca optou pelo Franchising para sua estratégia de expansão. Novas lojas e parceiros foram se somando e prêmios foram conquistados. Melhor Lojista Iguatemi; Melhor Vitrine; Melhor Franquia do Segmento; Melhor Etapa do Campeonato Estadual de Surf e assim a marca foi construída. Em 2010, a empresa conquistou o primeiro Selo de Excelência em Franchising da ABF, considerado o Oscar das Franquias.
Em 2012 a Revista Pequenas Empresas Grandes Negócios (PEGN) analisou as 2.031 marcas de franquias do país e colocou a Loja Trópico como a 12° melhor franquia do país, além disso, na mesma pesquisa, a rede ficou em 4º lugar na preferência dos franqueados no índice de satisfação com o atendimento da franqueadora. Em 2013 nos tornamos a única empresa brasileira do segmento a ser chancelada por quatro anos consecutivos pela ABF.
Hoje são 26 unidades. Uma loja piloto, no Shopping Praia de Belas, em Porto Alegre, e 26 franquias, sendo 22 no Rio Grande do Sul e 4 em Santa Catarina, em Blumenau, Balneário Camboriú, Florianópolis e Chapecó.
A marca está em processo de franca expansão e entende que o público consumidor dos estilos surf e skate são parte de uma tendência de apaixonados por esporte que não para de atrair novos integrantes. Desta forma, a rede tem um projeto de crescimento em espiral no qual pretende conquistar novos franqueados em todas as cidades com mais de 50 mil habitantes dentro do Rio Grande do Sul e de Santa Catarina.
A Loja Trópico é despojada, única, autêntica e muito profissional. Utilizamos as ferramentas mais modernas disponíveis no mundo, com análise semanal feita pelo franqueador e enviada aos franqueados, verificando a venda, a não venda e seus motivos, o que permite aos vendedores buscarem uma melhora constante. Pretendemos levar o nosso slogan "somos feitos de água, movidos por música e inspirados pela arte" para todas as grandes cidades do Brasil.
Essa assinatura demonstra a nossa vocação pela natureza, pela emoção, por colocar na vida de cada um uma trilha sonora, tornando nossos clientes e funcionários mais felizes. A Loja Trópico é mais do que um varejo rentável. É uma marca com causa e propósito bem definidos. É uma maneira de promover a qualidade de vida da sociedade, aproximar os clientes da natureza e de seu equilíbrio. A marca luta pela sustentabilidade e principalmente, valoriza a família, por isso deseja e estimula que o franqueado comungue desses valores.</p>
                                </li>
                            </ul>
                        </div>
                        </div> 
                    </div><!--box 2-->       

                    ',
	3=>'    <div class="col-xs-12 col-sm-12 col-md-12" id="box">
        <div class="col-xs-12 col-sm-12 col-md-12" >
            <h2>Veja alguns de nossos produtos:</h2>
		        <div class="col-xs-12 col-sm-6 col-md-2">
		             <a href="#" class="btn btn-lg btn-success"><img src="imagens/produtos/1.jpg" width="190"></a>
		        </div>
		       
		        <div class="col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
		            <a href="#" class="btn btn-lg btn-success"><img src="imagens/produtos/2.jpg" width="190"></a>
		        </div>

		        <div class="col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
		            <a href="#" class="btn btn-lg btn-success"><img src="imagens/produtos/3.jpg" width="190"></a>
		        </div>

		        <div class="col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
		            <a href="#" class="btn btn-lg btn-success"><img src="imagens/produtos/4.jpg" width="190"></a>
		        </div> 		                                              
        </div>
    </div>  

    <div class="col-xs-12 col-sm-12 col-md-12" id="box2">
        <div class="col-xs-12 col-sm-12 col-md-12" >
		        <div class="col-xs-12 col-sm-6 col-md-2">
		            <a href="#" class="btn btn-lg btn-success"><img src="imagens/produtos/5.jpg" width="190"></a>
		        </div>

		        <div class="col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
		            <a href="#" class="btn btn-lg btn-success"><img src="imagens/produtos/6.jpg" width="190"></a>
		        </div>

		        <div class="col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
		            <a href="#" class="btn btn-lg btn-success"><img src="imagens/produtos/7.jpg" width="190"></a>
		        </div>

		        <div class="col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
		            <a href="#" class="btn btn-lg btn-success"><img src="imagens/produtos/8.jpg" width="190"></a>
		        </div> 		                                              
        </div>
    </div>  

    <div class="col-xs-12 col-sm-12 col-md-12" id="box2">
        <div class="col-xs-12 col-sm-12 col-md-12" >
		        <div class="col-xs-12 col-sm-6 col-md-2">
		            <a href="#" class="btn btn-lg btn-success"><img src="imagens/produtos/9.jpg" width="190"></a>
		        </div>

		        <div class="col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
		            <a href="#" class="btn btn-lg btn-success"><img src="imagens/produtos/10.jpg" width="190"></a>
		        </div>

		        <div class="col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
		            <a href="#" class="btn btn-lg btn-success"><img src="imagens/produtos/11.jpg" width="190"></a>
		        </div>

		        <div class="col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
		            <a href="#" class="btn btn-lg btn-success"><img src="imagens/produtos/12.jpg" width="190"></a>
		        </div> 		                                              
        </div>
    </div>

',

	4=>'
    <div class="col-xs-12 col-sm-12 col-md-12" id="box">
        <div class="col-xs-12 col-sm-12 col-md-12" >
            <h2>Nossos serviços:</h2>
		        <div class="col-xs-12 col-sm-6 col-md-12" style="background:black; color:#FFF;">
		             

					<p style="width:500px;"> Abaixo estão listados alguns dos serviços que nós prestamos:</p>

					<ul style="width:500px;">
						<li>Venda de Roupas Moda Surf</li>
						<li>Venda de Pranchas de Surf</li>
						<li>Venda de Artigos e acessorios de Surf em geral</li>
						<li>Aulas de Surf para novatos</li>
						<li>Palestras de surf</li>
					</ul>
					

					<img src="imagens/aula.jpg" width=1083 style="align:center; text-align:center; float:left;" />
		        </div>
		       
		        
    	</div>

	</div>
',
	5=>'<div class="col-xs-12 col-sm-12 col-md-12" id="box">
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

	</div>',
	6=>'    <div class="col-xs-12 col-sm-12 col-md-12" id="box">
        <div class="col-xs-12 col-sm-12 col-md-12" >
            <h2>ERRO 404, A PÁGINA NÃO FOI ENCONTRADA!</h2>
		        
    	</div>

	</div>'
);

$cont_paginas = sizeof($nomes_paginas);

for($i = 1; $i<=$cont_paginas; $i++ ){

$titulo   = $titulo_paginas[$i];
$pagina   = $nomes_paginas[$i];
$conteudo = $conteudo_paginas[$i];

$sql = "INSERT INTO paginas(titulo, pagina, conteudo) VALUES(:titulo, :pagina, :conteudo)";

$stmt = $conecta->prepare($sql);
$stmt->bindValue(":titulo", $titulo);
$stmt->bindValue("pagina", $pagina);
$stmt->bindValue("conteudo", $conteudo);
$stmt->execute();

$paginas[] = $pagina;
$conteudos[] = $conteudo;

}


echo "/\OK/\\<br>";




 ?>
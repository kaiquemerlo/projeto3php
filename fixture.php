<?php 

require_once 'conexaoDB.php';


$conecta = conexaoDB(); // ta vindo no require



//DELETANDO OS DADOS DA 
echo "DELETANDO! <br>";
$conecta->query("DROP TABLE IF EXISTS fixture");
echo "/\OK/\\<br>";

echo "CRIANDO TABELA FIXTURE COM MESMOS CAMPOS!<br>";
$conecta->query("CREATE TABLE fixture(
	id INT NOT NULL AUTO_INCREMENT,
	pagina VARCHAR(255),
	conteudo TEXT,
	PRIMARY KEY (id)
	);	
");
echo "/\OK/\\<br>";



echo "INSERINDO OS DADOS NA TABELA<br>";
$pagina = "pagina teste";
$conteudo = "pagina teste1";

for($i = 0; $i<=5; $i++ ){

$pagina = "nome pagina " . $i;
$conteudo = "conteudo pagina " . $i;

$sql = "INSERT INTO fixture(pagina, conteudo) VALUES(:pagina, :conteudo)";

$stmt = $conecta->prepare($sql);
$stmt->bindValue("pagina", $pagina);
$stmt->bindValue("conteudo", $conteudo);
$stmt->execute();

$paginas[] = $pagina;
$conteudos[] = $conteudo;

}


foreach($paginas as $p){
	echo $p . '<br>';
}
foreach($conteudos as $c){
	echo $c . '<br>';
}
echo "/\OK/\\<br>";




 ?>
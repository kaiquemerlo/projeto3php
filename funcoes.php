<?php

require_once'conexaoDB.php';


function exibeResultados($pagina){ // essa função redireciona pro index que verifica se a pagina existe e faz a busca no bd;

	$conecta = conexaoDB();

	$sql = "SELECT * FROM paginas WHERE conteudo LIKE :pagina";
	$stmt = $conecta->prepare($sql);
	$stmt->bindValue(':pagina','%'.$pagina.'%');
	$stmt->execute();
	$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$contar = sizeof($resultado);


	if($contar > 0){
	echo "<p>Resultados da busca!</p>";
	foreach($resultado as $result){

		$pagina = $result['pagina'];

		if($pagina == "erro"){

		}else{
		echo "<a href='$pagina' title='$pagina'>$pagina</a><br>"; 
		}
	}

	}else{			
		echo "<p class='lert alert-danger'>Sua busca nao retornou nenhum resultado!</p>";

	}
}


function rota($path){

$conecta = conexaoDB();

$paginas = array( // array guarda as rotas existentes
	"/",
	"home",
	"empresa",
	"produtos",
	"servicos",
	"contato"
);




if(isset($_POST['pesquisar'])){

	$pesquisa = $_POST['pesquisa'];

	$sql = "SELECT conteudo FROM paginas WHERE conteudo LIKE %:pesquisa%";
	$stmt = $conecta->prepare($sql);
	$stmt->bindValue('pesquisa', $pesquisa); 
	$stmt->execute();
	$resposta = $stmt->fetch(PDO::FETCH_ASSOC);
	$titulo = $resposta['titulo'];
	$conteudo = $resposta['conteudo'];
	$data = date('Y');

	$conteudo = $resposta['conteudo'];    

	echo $conteudo;


	die();

}



// verificando se o path esta na pagina raiz /
if($path == "/"){

	$retirando = "home";
	$sql = "SELECT conteudo FROM paginas WHERE pagina = :pagina";
	$stmt = $conecta->prepare($sql);
	$stmt->bindValue('pagina', $retirando);
	$stmt->execute();
	$res = $stmt->fetch(PDO::FETCH_ASSOC);

	echo $res['conteudo'];
	
	die;
}


$retirando = str_replace("/", "", $path); // trocando / por " " np path para verificar se o arquivo existe

if(in_array($retirando, $paginas)){ // se a rota armazenada em $retirando n existir no array $paginas mostra a pagina de erros


	$sql = "SELECT conteudo FROM paginas WHERE pagina = :pagina";
	$stmt = $conecta->prepare($sql);
	$stmt->bindValue('pagina', $retirando);
	$stmt->execute();
	$res = $stmt->fetch(PDO::FETCH_ASSOC);

	echo $res['conteudo'];


}else{
	header("HTTP/1.0 404 Not Found"); 
	$pagina = "erro";
	$sql = "SELECT conteudo FROM paginas WHERE pagina = :pagina";
	$stmt = $conecta->prepare($sql);
	$stmt->bindValue('pagina', $pagina);
	$stmt->execute();
	$res = $stmt->fetch(PDO::FETCH_ASSOC);

	echo $res['conteudo'];
	require_once('inc/footer.php');
	die;
}

}

?>
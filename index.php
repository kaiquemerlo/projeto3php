<?php require_once'inc/header.php'; 
	  require_once'funcoes.php';
?>

<?php 
$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); // passando a url
$caminho = $rota['path']; // pegando o path



rota($caminho); // chama a funcao e passa como parametro o path da rota solicitada q sera tratada dentro da função
?>

                    
<?php require_once('inc/footer.php'); ?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SURF</title>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>    
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    
</head>

<body>

<?php date_default_timezone_set('America/Sao_Paulo'); ?>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 bg">
                
                <header>
            
                <div class="menu">
                    <div class="container">

                   
                    <nav class="navbar navbar-inverse barra-style" id="barra-style">
                     <div class="col-sm-3">
                        <div class="navbar-header">
                            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">
                                MARÉSURF
                            </a>
                        </div>
                    </div><!--col-md-5-->
                    
                    <div class="col-sm-8">
                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="home">Home</a>
                            </li>
                            <li>
                                <a href="empresa">Empresa</a>
                            </li>
                            <li>
                                <a href="produtos">Produtos</a>
                            </li>
                            <li>
                                <a href="servicos">Serviços</a>
                            </li>
                            <li>
                                <a href="contato">Contato</a>
                            </li>
                            
                            <li>                    
                            <form action="pesquisa.php" method="post" name="pagina">       
                                <input name="pesquisa" style="margin:8px 0 0 0" type="text" class="form-control" style="float: left;" placeholder="faça uma busca"/>
                                
                            </li>
                            <li>
                                <button type="submit" name="" class="btn btn-md btn-primary" style="margin:8px 0 0 8px" type="submit" name="pesquisar">Pesquisar</button>
                            </form>
                            </li>
                            
                        </ul>

                    </div><!-- container da navbar header-->
                    </div><!-- navbar right-->

                    </nav>

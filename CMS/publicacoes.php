<?php
    require_once("../include/initialize.php");
    require_once("../include/classes/sessao.php");    
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>
            CMS - Publicações | City Share
		</title>
        <link rel="stylesheet" type="text/css" href="CSS/Style.css">
        <link rel="icon" href="../img/icones/logoCityShareIcon.png">
	</head>
	<body>
        <div id="container">
           <?php
                include("layout/header.php");
            ?>
            <div class="CMS_main" id="pag-clientes">
                <?php include("layout/menu.php") ?>
                <div id="box-caminho">
                    <a href="CMS_home.php" class="link-caminho" >Home</a> ><a href="CMS_clientes.php" class="link-caminho"> Clientes</a> ><a href="publicacoes.php" class="link-caminho"> Publicações</a>
                </div>
                <a href="publicacao_detalhe.php">
                    <div class="box-publicacao-preview">
                    <div class="box-publicacao-imagem">
                        <img src="Image/content_test.jpg" class="publicacao-imagem">
                    </div>
                    <div class="box-publicacao-dados">
                        Nome da publicação<br>
                        Nome do proprietário
                    </div>
                    <div class="box-publicacao-status">
                        pendente<br>
                        5 dias
                    </div>
                </div>
                </a>
            </div>
            <?php
                include("layout/footer.php");
            ?>
        </div>      
	</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>
            CMS - Conteúdo | City Share
		</title>
        <link rel="stylesheet" type="text/css" href="CSS/Style.css">
	</head>
	<body>
        <div id="container">
            <?php
                include("layout/header.php");
            ?>
            <div class="CMS_main" id="pag-cityshare-contato">
                <div class="box-menu-lateral">
                     <div class="menu-lateral">
                        <ul>
                            <li class="botao-menu-lateral">
                                <a href="CMS_home.php">Home</a>
                                <img src="Image/50x50.gif"/>
                            </li>
                            <li class="botao-menu-lateral">
                                <a href="#">Clientes</a>
                                <img src="Image/50x50.gif"/>
                            </li>
                            <li class="botao-menu-lateral">
                                <a href="CMS_cityshare.php">City Share</a>
                                <img src="Image/50x50.gif"/>
                            </li>
                            <li class="botao-menu-lateral">
                                <a href="#">Desktop</a>
                                <img src="Image/50x50.gif"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="box-caminho">
                    <a href="CMS_home.php" class="link-caminho" >Home</a> ><a href="CMS_cityshare.php" class="link-caminho"> City Share</a> > <a href="CMS_cityshare_conteudo.php" class="link-caminho" >Conteúdo</a>
                </div>
                <div class="box-conteudo">
                    <div class="titulo-sesssao">
                        Fale conosco
                    </div>
                    <div id="containner-fale-conosco">
                        <div class="item-fale-conosco">
                            <div class="titulo-input">
                                Email
                            </div>
                            <input type="text" class="input-pagina">
                        </div>
                        <div class="item-fale-conosco">
                            <div class="titulo-input">
                                Telefone
                            </div>
                            <input type="text" class="input-pagina">
                        </div>
                        <div class="item-fale-conosco">
                            <div class="titulo-input">
                                Atendimento
                            </div>
                            <input type="text" class="input-pagina">
                        </div>
                        <div class="item-fale-conosco">
                            <div class="titulo-input">
                                Pagina
                            </div>
                            <input type="text" class="input-pagina">
                        </div>
                        
                    
                    </div>
                    
                    
                    <div class="titulo-sesssao">
                        Perguntas frequentes
                    </div>
                    <div id="containner-perguntas">
                        <div class="pergunta">
                            <div class="titulo-input">
                                Pergunta 
                            </div>
                            <input type="text" class="input-pagina">
                            <div class="titulo-input">
                                Resposta 
                            </div>
                            <input type="text" class="input-pagina">
                        </div>
                        <div class="pergunta">
                            <div class="titulo-input">
                                Pergunta 
                            </div>
                            <input type="text" class="input-pagina">
                            <div class="titulo-input">
                                Resposta 
                            </div>
                            <input type="text" class="input-pagina">
                        </div>
                        <div class="pergunta">
                            <div class="titulo-input">
                                Pergunta 
                            </div>
                            <input type="text" class="input-pagina">
                            <div class="titulo-input">
                                Resposta 
                            </div>
                            <input type="text" class="input-pagina">
                        </div>
                        <div class="pergunta">
                            <div class="titulo-input">
                                Pergunta 
                            </div>
                            <input type="text" class="input-pagina">
                            <div class="titulo-input">
                                Resposta 
                            </div>
                            <input type="text" class="input-pagina">
                        </div>
                    
                    </div>
                    <div class="box-botao">
                        <input type="submit" class="preset-input-submit" value="Salvar">
                    </div>
                </div>
            </div>
            <?php
                include("layout/footer.php");
            ?>
        </div>      
	</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Cadastro | City Share</title>
        <meta name="viewport" content="width=device-width"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="img/icones/logoCityShareIcon.png">
    </head>
    <body>
        <div id="container">
            <?php require_once("layout/header.php"); ?>
            <div class="js-popup-painel painel-mobile" id="box-mobile-menu">
                <ul id="mobile-menu">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ALUGUE</a></li>
                    <li><a href="#">EMPRESTE</a></li>
                    <li><a href="#">CONTATO</a></li>                    
                </ul>
            </div>
            <!-- MENU DE PAGINAS - MOBILE -->
            <div class="main" id="pag-cadastro">
                <div class="imagem-divisao-conteudo"></div>
                <div id="box-tipo-conta">
                    <div class="box-conteudo">
                        <div id="container-botoes-conta">
                            <span class="preset-botao botao-conta" id="botao-conta-fisica">Física</span>
                            <span class="preset-botao botao-conta" id="botao-conta-juridica">Jurídica</span>
                        </div>                
                    </div>
                    <div class="indicador-modo"></div>
                </div>
                <div class="box-conteudo">
                    <div class="js-cadastro-ativo" id="container-cadastro-fisico">
                        <form method="post" action="#">
                            <section class="js-etapa1 box-cadastro" id="box-info-pessoais">
                                <h1 class="titulo-cadastro">Informações Pessoais</h1>               
                                <div class="label-input">
                                    <label class="label"><span class="input-label">Nome*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                <div class="label-input">
                                    <label class="label"><span class="input-label">Sobrenome*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                <div class="horizontal-input-container">
                                    <div class="label-input">
                                        <label class="label"><span class="input-label">Data de Nascimento*:</span>
                                            <input class="preset-input-text text-input" type="text" />
                                        </label>
                                    </div>
                                    <div class="label-input">
                                        <p class="label">Sexo:</p>
                                        <input class="radio-input" type="radio" />
                                        <label class="label radio-label">Feminino</label>
                                        <input class="radio-input" type="radio" />
                                        <label class="label radio-label">Masculino</label>
                                    </div>
                                </div>
                                <div class="horizontal-input-container">
                                    <div class="label-input">
                                        <label class="label"><span class="input-label">CPF*:</span>
                                            <input class="preset-input-text text-input" type="text" />
                                        </label>
                                    </div>
                                    <div class="label-input">
                                        <label class="label"><span class="input-label">RG*:</span>
                                            <input class="preset-input-text text-input" type="text" />
                                        </label>
                                    </div>
                                </div>
                                <span class="js-botao-transf js-etapa2 preset-botao button-link">Confirmar</span>
                            </section>
                            <section class="js-etapa2 box-cadastro" id="box-info-contato">
                                <h1 class="titulo-cadastro">Informações de Contato</h1>               
                                <div class="label-input">
                                    <label class="label"><span class="input-label">Telefone*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                <div class="label-input">
                                    <label class="label"><span class="input-label">Celular*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                <div class="label-input">
                                    <label class="label"><span class="input-label">Email*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                <div class="horizontal-input-container">
                                    <p class="js-botao-transf js-etapa3 preset-botao button-link">Vou alugar</p>
                                    <p class="js-botao-transf js-etapa4 preset-botao button-link">Vou emprestar</p>
                                </div>
                            </section>
                            <section class="js-etapa3 box-cadastro" id="box-cartao-credito">
                                <h1 class="titulo-cadastro">Cartão de Crédito</h1>               
                                <div class="label-input">
                                    <label class="label"><span class="input-label">Nome do Titular do Cartão*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                <div class="label-input">
                                    <label class="label"><span class="input-label">Número do Cartão*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                <div class="horizontal-input-container">
                                    <div class="label-input">
                                        <label class="label"><span class="input-label">Validade (mm/aa)*:</span>
                                            <input class="preset-input-text text-input" type="text" placeholder="Mês" />
                                        </label>
                                    </div>
                                    <div class="label-input">
                                        <input class="preset-input-text text-input" type="text" placeholder="Ano" />
                                    </div>
                                </div>
                                <p class="js-botao-transf js-etapa5 preset-botao button-link">Confirmar</p>
                            </section>
                            <section class="js-etapa4 box-cadastro" id="box-conta-bancaria">
                                <h1 class="titulo-cadastro">Conta Bancária</h1>               
                                <div class="label-input">
                                    <label class="label"><span class="input-label">Número da Agência*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                <div class="label-input">
                                    <label class="label"><span class="input-label">Número da Conta*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                    <p class="js-botao-transf js-etapa6 preset-botao button-link">Confirmar</p>
                            </section>
                            <section class="js-etapa5 box-cadastro" id="box-conducao">
                                <h1 class="titulo-cadastro">Dados de Condução</h1>               
                                <div class="label-input">
                                    <label class="label"><span class="input-label">CNH*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                    <p class="js-botao-transf js-etapa6 preset-botao button-link">Confirmar</p>
                            </section>
                            <section class="js-etapa6 box-cadastro" id="box-autenticacao">
                                <h1 class="titulo-cadastro">Autenticação</h1>               
                                <div class="label-input">
                                    <label class="label"><span class="input-label">Senha*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                <div class="label-input">
                                    <label class="label"><span class="input-label">Confirmar Senha*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                <input class="preset-input-submit button-link botao-cadastrar" type="submit" value="Criar Conta"/>
                            </section>
                        </form>
                    </div>
                    <div id="container-cadastro-juridico">
                        <form method="post" action="#">
                            <section class="js-etapa1 box-cadastro" id="box-info-pessoais">
                                <h1 class="titulo-cadastro">Informações Pessoais</h1>               
                                <div class="label-input">
                                    <label class="label"><span class="input-label">Nome*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                <div class="label-input">
                                    <label class="label"><span class="input-label">Sobrenome*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                <div class="horizontal-input-container">
                                    <div class="label-input">
                                        <label class="label"><span class="input-label">Data de Nascimento*:</span>
                                            <input class="preset-input-text text-input" type="text" />
                                        </label>
                                    </div>
                                    <div class="label-input">
                                        <p class="label">Sexo:</p>
                                        <input class="radio-input" type="radio" />
                                        <label class="label radio-label">Feminino</label>
                                        <input class="radio-input" type="radio" />
                                        <label class="label radio-label">Masculino</label>
                                    </div>
                                </div>                                
                                <p class="js-botao-transf js-etapa2 preset-botao button-link">Confirmar</p>
                            </section>
                            <section class="js-etapa2 box-cadastro" id="box-info-empresa">
                                <h1 class="titulo-cadastro">Dados da Empresa</h1>               
                                <div class="label-input">
                                    <label class="label"><span class="input-label">Razão Social*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                <div class="label-input">
                                    <label class="label"><span class="input-label">Nome Fantasia*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                <div class="horizontal-input-container">
                                    <div class="label-input">
                                        <label class="label"><span class="input-label">CNPJ*:</span>
                                            <input class="preset-input-text text-input" type="text" />
                                        </label>
                                    </div>                                    
                                </div>                                
                                <p class="js-botao-transf js-etapa3 preset-botao button-link">Confirmar</p>
                            </section>
                            <section class="js-etapa3 box-cadastro" id="box-conta-bancaria">
                                <h1 class="titulo-cadastro">Conta Bancária</h1>               
                                <div class="label-input">
                                    <label class="label"><span class="input-label">Número da Agência*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                <div class="label-input">
                                    <label class="label"><span class="input-label">Número da Conta*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                    <p class="js-botao-transf js-etapa4 preset-botao button-link">Confirmar</p>
                            </section>
                            <section class="js-etapa4 box-cadastro" id="box-autenticacao">
                                <h1 class="titulo-cadastro">Autenticação</h1>               
                                <div class="label-input">
                                    <label class="label"><span class="input-label">Senha*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                <div class="label-input">
                                    <label class="label"><span class="input-label">Confirmar Senha*:</span>
                                        <input class="preset-input-text text-input" type="text" />
                                    </label>
                                </div>
                                <input class="preset-input-submit button-link botao-cadastrar" type="submit" value="Criar Conta"/>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
            <!-- CONTEUDO PRINCIPAL -->
        </div>
        <?php require_once("layout/footer.php"); ?>
        <script src="js/libs/jquery-3.1.1.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>

<?php
session_start();
$id = $_SESSION['id'];
$nome = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Titulo da Pagina -->
    <title>Cadastro de Clientes</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="styleshefet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/themeestab.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
<!-- HEADER MOBILE-->
<?php
	        if($_SESSION['tipousu'] == 0){
                require_once 'View/SidebarMobile.php';
            }
            else if ($_SESSION['tipousu'] == 1){
                require_once 'View/SidebarMobile.php';
            }
            else{
                require_once 'View/SidebarMobile.php';
            } 
        ?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php
	        if($_SESSION['tipousu'] == 0){
                require_once 'View/Sidebar.php';
            }
            else if ($_SESSION['tipousu'] == 1){
                require_once 'View/Sidebar.php';
            }
            else{
                require_once 'View/Sidebar.php';
            } 
        ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                        <img src="images/icon/avatar.png" alt="" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION["nome"]; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                    <img src="images/icon/avatar.png" alt="" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                    </h5>
                                                    <p>Nome do usuário: </p>
                                                        <a href="#"><?php echo $_SESSION["usuario"]; ?></a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                    <a href="index.php">
                                                        <i class="zmdi zmdi-home"></i>Pagina principal</a>
                                                </div>
                                            <div class="account-dropdown__footer">
                                            <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Sair</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <form action="php/insertcliente.php" method="POST">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div style="float:left;width:900px;height:100px;">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Cadastro de Clientes</strong>
                                    <button type="submit" id="salvar" class="btn btn-success">Salvar</button>
                                    <button type="button" id="cancelar" class="btn btn-danger"><a href="listacliente.php">Cancelar</a></button>
                                </div>
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label for="company" class=" form-control-label">Nome</label>
                                        <input type="text" id="nome" name="nome" placeholder="Informe a Razão Social do Cliente" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="vat" class=" form-control-label">Sobrenome</label>
                                        <input type="text" id="sobrenome" name="sobrenome" placeholder="Informe o Nome Fantasia do Cliente" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="street" class=" form-control-label">CPF</label>
                                        <input type="text" id="cpf" name="cpf" placeholder="Informe o CPF ou CNPJ" class="form-control">
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label for="city" class=" form-control-label">RG</label>
                                                <input type="text" id="rg" name="rg" placeholder="Informe o RG" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="selectSm" class=" form-control-label">Ativo?</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="ativo" id="ativo" class="form-control-sm form-control">
                                                <option value="0">Clique aqui para escolher</option>
                                                <option value="Sim">Sim</option>
                                                <option value="Nao">Não</option>
                                            </select>
                                        </div><br>
                                        <div class="col-8"><br>
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Primeiro número para contato</label>
                                                    <input type="text" id="telefone1" name="Telefone1" placeholder="Informe o primeiro número de telefone" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-8">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Segundo número para contato (Opcional)</label>
                                                    <input type="text" id="telefone2" name="telefone2" placeholder="Informe o segundo número de telefone" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-8">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Telefone Celular (Opcional)</label>
                                                    <input type="text" id="celular" name="celular" placeholder="Informe um número de celular com DDD" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-8">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">E-Mail</label>
                                                    <input type="email" id="email" name="email" placeholder="Informe um endereço de E-mail" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-8">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">CEP</label>
                                                    <input type="texte" id="cep" name="cep" placeholder="Informe o número de CEP do bairro" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-8">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Endereço</label>
                                                    <input type="text" id="logradouro" name="logradouro" placeholder="Informe o endereço" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-8">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Bairro</label>
                                                    <input type="text" id="bairro" name="bairro" placeholder="Informe o bairro" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-8">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Cidade</label>
                                                    <input type="text" id="cidade" name="cidade" placeholder="Informe a cidade" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-8">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Múnicipio</label>
                                                    <input type="text" id="cidade" name="municipio" placeholder="Informe o múnicipio" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-8">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">UF</label>
                                                    <input type="text" id="uf" name="uf" placeholder="Informe a UF" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-8">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Número</label>
                                                    <input type="text" id="numero" name="numero" placeholder="Informe o número " class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-8">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Complemento (Opcional)</label>
                                                    <input type="text" id="complemento" name="complemento" placeholder="Informe o complemento" class="form-control">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                         </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </form>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#logradouro").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#logradouro").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#logradouro").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->

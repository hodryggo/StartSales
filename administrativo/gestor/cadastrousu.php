
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
    <title>Cadastro de Usuários</title>

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
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/themeusu.css" rel="stylesheet" media="all">

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
            <form action="php/insertusu.php" method="POST">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div style="float:left;width:900px;height:100px;">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Cadastro de Usuário</strong>
                                    <button type="submit" id="salvar" class="btn btn-success">Salvar</button>
                                    <button type="button" id="cancelar" class="btn btn-danger"><a href="listausu.php">Cancelar</a></button>
                                </div>
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label for="company" class=" form-control-label">Nome Completo</label>
                                        <input type="text" id="nome" name="nome" placeholder="Informe o primeiro nome do usuário" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="vat" class=" form-control-label">Login</label>
                                        <input type="text" id="login" name="login" placeholder="Informe o último nome do usuário" class="form-control">
                                    </div>
                                    <div class="row form-group">
                                                        <div class="col-8">
                                                            <div class="form-group">
                                                                <label for="city" class=" form-control-label">senha</label>
                                                                <input type="password" id="senha" name="senha" placeholder="Informe uma senha" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                        <div class="col col-md-3">
                                                        <label for="selectSm" class=" form-control-label">Cargo</label>
                                                        </div>
                                                        <select name="cargo" id="cargo" class="form-control-sm form-control">
                                                        <option value="">Escolha uma Opção</option>
                                                        <option value="0">Administrador</option>
                                                        <option value="1">Gerente</option>
                                                        <option value="2">Operador</option>
                                                        </select>
                                                        </div><br>
                                                        <div class="col-12 col-md-9">
                                                        <div class="col col-md-3">
                                                        <label for="selectSm" class=" form-control-label">Ativo</label>
                                                        </div>
                                                        <select name="ativo" id="ativo" class="form-control-sm form-control">
                                                        <option value="0">Escolha uma Opção</option>
                                                        <option value="Sim">Sim</option>
                                                        <option value="Nao">Não</option>
                                                        </select>
                                                        </div><br>
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

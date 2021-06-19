<?php
session_start();
include_once '../App/protection.php';
 ?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>S-PDV</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="../Assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="../Assets/css/owl.carousel.css">
    <link rel="stylesheet" href="../Assets/css/owl.theme.css">
    <link rel="stylesheet" href="../Assets/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="../Assets/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="../Assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../Assets/css/normalize.css">
	<!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="../Assets/css/wave/waves.min.css">
    <link rel="stylesheet" href="../Assets/css/wave/button.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../Assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="../Assets/css/notika-custom-icon.css">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="../Assets/css/jquery.dataTables.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="../Assets/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="../Assets/css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../Assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="../Assets/js/vendor/modernizr-2.8.3.min.js"></script>
     <link rel="stylesheet" href="../Assets/style.css">
</head>
<body>
        <div class="header-top-area" id="barra-view">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area"
                    >
                        <a  id="logo-view" href=""><i class="fa fa-shopping-basket"></i> SPDV</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                            </li>
                            <li class="nav-item dropdown">
                                
                            </li>
                            <li class="nav-item nc-al">

                            </li>
                            <li class="nav-item">
                            </li>
                            <li class="nav-item">
                                <a  id="barra-view-link" href="" class="nav-link dropdown-toggle">
                                <span>
                              Bem-vindo(a):  <i class="fa fa-user"></i>
                                </span><?= $_SESSION['userName'];?></a>
                            </li>
                            <li class="nav-item">
                                <a  id="barra-view-link" href="../Backup/backup.php" class="nav-link dropdown-toggle"><span>
                                    <i class="fa fa-sign-out"></i>
                                </span>Sair</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                         <li id="link-view">
                            <a id="link-view-page"  href="view-shopping.cart.php">
                            <i class="fa fa-shopping-cart"></i> Cart PDV
                        </a>
                        </li>
                        <li id="link-view">
                            <a id="link-view-page"  href="view-requests.php">
                            <i class="fa fa-shopping-basket"></i> Pedidos
                        </a>
                        </li>
                         <li id="link-view">
                            <a id="link-view-page"  href="view-product.list.php">
                            <i class="fa fa-barcode"></i> Produtos
                        </a>
                        </li>
                         <li id="link-view">
                            <a id="link-view-page" href="../Backup/backup.php">
                            <i class="fa fa-database"></i> Salvar Backup
                        </a>
                        </li>
                        <li id="link-view">
                            <a id="link-view-page" href="view-config.php">
                            <i class="fa fa-cogs"></i> Config
                        </a>
                        </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
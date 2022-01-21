<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Painel de Controle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Página principal do sistema">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="icon" type="image/jpg" href="img/m.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--icones do google - via api--->

    <link href="estilo/main.css" rel="stylesheet"> <!-- estilização da página padrão -->
</head>

<body>

    <!----------------------------------- topo da página, contendo todo o cabeçalho ------------------------------------->




    <div id="menu_retratil" class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src">Logo Marca</div>
                <div class="header__pane ml-auto">
                    <div>
                        <button id="muda_botao" onclick="fechar_menu();" type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <ul class="header-menu nav">
                    </ul>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="img/m.png" alt="">
                                            <!----- imagem de Login ---->
                                            <i class=""> ⌵</i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">

                                    <div class="widget-heading">
                                        <?php
                                        echo $_SESSION['nome'];
                                        ?>
                                    </div>
                                    <div class="widget-subheading">
                                        Administrador
                                    </div>
                                </div>
                                <!----- ficava um outro botão para aniversário ---->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-main">


            <script>
                function fechar_menu() {
                    const elemento1 = document.getElementById('menu_retratil');
                    const elemento2 = document.getElementById('muda_botao');

                    if (elemento1.classList) {
                        elemento1.classList.toggle('closed-sidebar');
                        elemento2.classList.toggle('is-active');
                    }
                }
            </script>


            <!---------------------------------------------------- todo o menu lateral  ------------------------------------------------->


            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">PAINEL DE CONTROLE
                            </li>
                            <li>
                                <a href="index.php" class="mm-active">
                                    <i class="img-painel">
                                        <i class="metismenu-icon pe-7s-diamond">
                                            <img src="img/icone/painel.svg" alt="">
                                        </i>
                                    </i>
                                    Painel de Controle
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Funções</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-diamond">
                                        <img src="img/icone/arrow-up-circle-outline.png" alt="">
                                    </i>
                                    Produtos
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="paginas/nova_entrada.php">
                                            <i class="metismenu-icon"></i>
                                            Novo
                                            <img src="img/icone/plus-circle-outline.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-dropdowns.html">
                                            <i class="metismenu-icon">
                                            </i><s>Comprar</s>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-icons.html">
                                            <i class="metismenu-icon">
                                            </i><s>Pedidos</s>
                                        </a>
                                    </li>

                            </li>
                        </ul>
                        </li>
                        <li>
                            <a href="paginas/mostrar_produtos.php">
                                <i class="metismenu-icon pe-7s-diamond">
                                    <img src="img/icone/arrow-down-circle-outline.png" alt="">
                                </i>
                                Clientes
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="paginas/nova_saida.php">
                                        <i class="metismenu-icon"></i>
                                        Novo
                                        <img src="img/icone/minus-circle-outline.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-badges-labels.html">
                                        <i class="metismenu-icon">
                                        </i>Acrescentar
                                    </a>
                                </li>

                        </li>
                        </ul>
                        </li>
                        <li>
                            <a href="paginas\mostrar_cliente.php">
                                <i class="metismenu-icon pe-7s-car material-icons">
                                    <img src="img/icone/barcode.png" alt="">
                                </i>
                                Relatórios
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="paginas\cadastrar_cliente.php">
                                        <i class="metismenu-icon">
                                        </i>Estoque minimo
                                    </a>
                                </li>
                                <li>
                                    <a href="components-calendar.html">
                                        <i class="metismenu-icon">
                                        </i>Estatísticas
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">


                <!---------------- toto miolo do site DASBOARD - PAINEL DE CONTROLE POR PADRÃO ------------------------>

                <div class="app-main__inner">

                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">

                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">

                                        <img class="ilustracao_funcao" src="img/icone/painel3.png" alt="painel de controle">
                                    </i>
                                </div>
                                <div>Painel de Controle
                                    <div class="page-title-subheading">Visão Geral

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-midnight-bloom">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Total de Vendas</div>
                                        <div class="widget-subheading">Total vendido</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>R$ 0,00</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-arielle-smile">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">A Receber</div>
                                        <div class="widget-subheading">Valor a receber</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>R$ 0,00</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-grow-early">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Limite MEI</div>
                                        <div class="widget-subheading">Total Utilizado</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>46%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header-tab-animation card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                        Histórico de Vendas
                                    </div>
                                    <ul class="nav">
                                        <li class="nav-item"><a href="javascript:void(0);" class="active nav-link">Diário</a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link second-tab-toggle">Mês atual</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tabs-eg-77">
                                            <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                <div class="widget-chat-wrapper-outer">
                                                    <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">

                                                        <canvas id="myChart"></canvas>

                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Movimentações</h6>
                                            <div class="scroll-area-sm">
                                                <div class="scrollbar-container">
                                                    <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Ella-Rose Henry</div>
                                                                        <div class="widget-subheading">Web Developer</div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>129</span>
                                                                            <small class="text-danger pl-2">
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Ruben Tillman</div>
                                                                        <div class="widget-subheading">UI Designer</div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>54</span>
                                                                            <small class="text-success pl-2">
                                                                                <i class="fa fa-angle-up"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Vinnie Wagstaff</div>
                                                                        <div class="widget-subheading">Java Programmer</div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>429</span>
                                                                            <small class="text-warning pl-2">
                                                                                <i class="fa fa-dot-circle"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Ella-Rose Henry</div>
                                                                        <div class="widget-subheading">Web Developer</div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>129</span>
                                                                            <small class="text-danger pl-2">
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Ruben Tillman</div>
                                                                        <div class="widget-subheading">UI Designer</div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>54</span>
                                                                            <small class="text-success pl-2">
                                                                                <i class="fa fa-angle-up"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Contas a Pagar</div>
                                            <div class="widget-subheading">Pendência com Fornecedores</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-success">R$ 0,00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!---------------------------------------- QUADRADO MOSTRA TOTAL EM ESTOQUE -------------------------------------------->

                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total em Estoque</div>
                                            <div class="widget-subheading">soma total do estoque</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-warning">
                                                R$
                                                <?php
                                                include_once("banco/valor_estoque.php");  //inclui a página valor_estoque que contém um ECHO com o resultado de um cálculo                                       
                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Limite de 80 Mil</div>
                                            <div class="widget-subheading">Limite MEI utilizado </div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger">45,9%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Income</div>
                                            <div class="widget-subheading">Expected totals</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-focus">$147</div>
                                        </div>
                                    </div>
                                    <div class="widget-progress-wrapper">
                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                                        </div>
                                        <div class="progress-sub-label">
                                            <div class="sub-label-left">Expenses</div>
                                            <div class="sub-label-right">100%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left pr-2 fsize-1">
                                                <div class="widget-numbers mt-0 fsize-3 text-danger">71%</div>
                                            </div>
                                            <div class="widget-content-right w-100">
                                                <div class="progress-bar-xs progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left fsize-1">
                                            <div class="text-muted opacity-6">Income Target</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-left card">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left pr-2 fsize-1">
                                                <div class="widget-numbers mt-0 fsize-3 text-success">54%</div>
                                            </div>
                                            <div class="widget-content-right w-100">
                                                <div class="progress-bar-xs progress">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left fsize-1">
                                            <div class="text-muted opacity-6">Expenses Target</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card-shadow-warning mb-3 widget-chart widget-chart2 text-left card">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left pr-2 fsize-1">
                                                <div class="widget-numbers mt-0 fsize-3 text-warning">32%</div>
                                            </div>
                                            <div class="widget-content-right w-100">
                                                <div class="progress-bar-xs progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left fsize-1">
                                            <div class="text-muted opacity-6">Spendings Target</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left pr-2 fsize-1">
                                                <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                                            </div>
                                            <div class="widget-content-right w-100">
                                                <div class="progress-bar-xs progress">
                                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left fsize-1">
                                            <div class="text-muted opacity-6">Meta do Anual</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="https://www.facebook.com/654.asd.gfwfw/" class="nav-link">
                                            Copyright© 2020 - Marcos Lourenço de Souza


                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="app-footer-right">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="https://wa.me/5582996909200" class="nav-link">
                                            <div class="badge badge-success mr-1 ml-0">
                                                <small>whatsapp</small>
                                            </div>
                                            (82) 99690-9200
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
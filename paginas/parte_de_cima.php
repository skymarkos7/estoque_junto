<?php
session_start(); //inicia uma sessão
?>


<!doctype html>
<html lang="pt-br">

<head>
    <!-- PARA BARRA DE PESQUISA --------->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    
   

    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="pt-br">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  <!-- Faz reconhecer comandos Jquery -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>LAP - Lourenço Alto Peças</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Página principal do sistema">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="icon" type="image/jpg" href="img/m.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--icones do google - via api--->
   

    <link href="../estilo/main.css" rel="stylesheet"> <!-- estilização da página padrão -->
    <link href="estilo/main.css" rel="stylesheet"> <!-- estilização da página padrão -->
    <link rel="icon" type="image/jpg" href="../img/five.png" /> <!-- fiveicon -->
    



    <!-- coisas ESTILO E JAVASCRIPT para pesquisa do PRODUTO e CLIENTE - INÍCIO -->
   <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />  -->

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- coisas ESTILO E JAVASCRIPT para pesquisa do PRODUTO e CLIENTE - FIM -->





    <link href="../estilo/componentes.css" rel="stylesheet"> <!-- para estilizar os demais componentes -->
    <link href="../estilo/pesquisa-pdv.css" rel="stylesheet"> <!-- para estilizar os demais componentes -->
   
    
</head>


<body>

    <!----------------------------------- topo da página, contendo todo o cabeçalho ------------------------------------->


    <div id="menu_retratil" ; class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"><img height="35px;" width="53px;" src="../img/logo.png" alt=""></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button id="muda_botao" ; type="button" onclick="fechar_menu();" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
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

                    <!--aqui ficava o botão de pesquisar -->



                    <!-- fim do pesquisar ----->

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
                                            <!----- imagem de Login ---->
                                            <img width="42" class="rounded-circle" src="../img/m.png" alt="">

                                            <i> ⌵</i>
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
                                        echo $_SESSION['nome']; // traz o nome do usuário logado 
                                        ?>
                                    </div>
                                    <div class="widget-subheading">
                                        Administrador
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-main">

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
                            <li class="app-sidebar__heading">PONTO DE VENDA
                            </li>
                            <li>
                                <a id="seleciona_pdv" href="pdv.php" class="">
                                    <i class="img-painel">
                                        <i class="metismenu-icon pe-7s-diamond">
                                            <img src="../img/icone/pdv.png" alt="">
                                        </i>
                                    </i>
                                    PDV
                                </a>
                            </li>                          

                            <li class="app-sidebar__heading">Funções</li>

                            
                            
                                                        
                            <li>  
                                <a id="seleciona_produto" type="button" ; class="" href="produtos.php">
                                
                                    <i class="metismenu-icon pe-7s-diamond">
                                        <img src="../img/icone/barcode.png" alt="">
                                    </i>
                                    Produtos
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a id="seleciona_nova_entrada" href="nova_entrada.php">
                                            <i class="metismenu-icon"></i>
                                            Novo
                                            <img src="../img/icone/plus-circle-outline.png" alt="">
                                        </a>
                                    </li>
                            </li>
                        </ul>
                        </li>
                        <li>
                            <a id="seleciona_cliente" href="../paginas/cliente.php">
                                <i class="metismenu-icon pe-7s-diamond">
                                    <i class="metismenu-icon pe-7s-diamond">
                                        <img src="../img/icone/clientes.png" alt="">
                                    </i>
                                </i>
                                Clientes
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>

                                <li>
                                    <a id="seleciona_novo_cliente" href="../paginas/cadastrar_cliente.php">
                                        <i class="metismenu-icon"></i>
                                        Novo
                                        <img src="../img/icone/plus-circle-outline.png" alt="">
                                    </a>
                                </li>
                        </li>
                        
                        </ul>
                        </li>
                        <li>
                            <a id="seleciona_relatorios" href="..\paginas\relatorios.php">
                                <i class="metismenu-icon pe-7s-diamond">
                                    <i class="metismenu-icon pe-7s-car">
                                        <img src="../img/icone/relatorios.png" alt="">
                                    </i>
                                </i>
                                Relatórios
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a id="seleciona_historico_vendas" href="historico_de_vendas.php">
                                        <i class="metismenu-icon">
                                        </i>histórico de vendas
                                    </a>
                                </li>
                            </ul>
                        </li>







                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">



                    <!--inicio - abrir e fechar o menu lateral do sistema ------>
                    <script>
                        function fechar_menu() {
                            const elemento1 = document.getElementById('menu_retratil');
                            const elemento2 = document.getElementById('muda_botao');

                            if (elemento1.classList) {
                                elemento1.classList.toggle('closed-sidebar');
                                elemento2.classList.toggle('is-active');
                            } else {
                                elemento1.className += ('closed-sidebar');
                                elemento2.className += ('is-active');
                            }
                        }
                    </script>
                    <!--Fim - abrir e fechar o menu lateral do sistema ------>
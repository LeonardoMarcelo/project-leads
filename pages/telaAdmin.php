<?php
require_once '../config/conexao.php';
session_start();

 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("Location: ./login.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel ADM</title>
    <link rel="stylesheet" href="../css/animacao.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <header class="header" id="header">
        <nav class="navbar painelselect">



            <div class="nav__toggle" id="nav-toggle">
                <div class="toggle" id="toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <!-- <a href="#" class="nav__logo">LOGO</a> -->
            <div class="nav__menu" id="nav-menu">

                <ul class="nav__list">
                    <li class="nav__item" id="item-nav1">
                        <a href="telaAdmin.php" class="nav__link">
                            <span class="icon">
                                <img src="../icons/donut_small_black_24dp.svg" alt="home">
                            </span>
                            <span class="title-namenav">
                                Painel
                            </span>
                        </a>
                    </li>
                    <li class="nav__item" id="item-nav2">
                        <a href="coletarpf.php" class="nav__link">
                            <span class="icon">
                                <img src="../icons/badge_black_24dp.svg" alt="home">
                            </span>
                            <span class="title-namenav">
                                Coletar Leads PF
                            </span>
                        </a>
                    </li>
                    <li class="nav__item" id="item-nav3">
                        <a href="coletarpj.php" class="nav__link">
                            <span class="icon">
                                <img src="../icons/badge_black_24dp.svg" alt="home">
                            </span>
                            <span class="title-namenav">
                                Coletar Leads PJ
                            </span>
                        </a>
                    </li>
                    <li class="nav__item" id="item-nav4">
                        <a href="saldo.php" class="nav__link">
                            <span class="icon">
                                <img src="../icons/cash-outline.svg" alt="home">
                            </span>
                            <span class="title-namenav">
                                Inserir Saldo
                            </span>
                        </a>
                    </li>
                    <!-- <li class="nav__item">
                        <a href="" class="nav__link">
                            <span class="icon">
                                <img src="../icons/shopping_bag_black_24dp (1).svg" alt="home">
                            </span>
                            <span class="title-namenav">
                                Vendas
                            </span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="" class="nav__link">
                            <span class="icon">
                                <img src="../icons/storefront_black_24dp.svg" alt="home">
                            </span>
                            <span class="title-namenav">
                                Loja
                            </span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="" class="nav__link">
                            <span class="icon">
                                <img src="../icons/shopping_bag_black_24dp (1).svg" alt="home">
                            </span>
                            <span class="title-namenav">
                                Compras
                            </span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="" class="nav__link">
                            <span class="icon">
                                <img src="../icons/account_tree_black_24dp.svg" alt="home">
                            </span>
                            <span class="title-namenav">
                                Árvore
                            </span>
                        </a>
                    </li>-->
                    <li class="nav__item">
                        <a href="logout.php" class="nav__link">
                            <span class="icon">
                                <img src="../icons/log-out-outline.svg" alt="home">
                            </span>
                            <span class="title-namenav">
                                Logout
                            </span>
                        </a>
                    </li> 
                </ul>
            </div>
        </nav>
    </header>



    <main class="conteudo">


        <section class="search">

            <form action="" class="search-bar">
                <button class="busca"><img src="../icons/search-outline.svg" alt="dsjhd"></button>
                <input type="text" class="linha-pesquisa" placeholder="Pesquise aqui">
            </form>

        </section>

        <section class="painel-inicial">

            <div class="painel-info">
                <div class="dado-painel">
                    <div class="info-dado">
                        <h3>0</h3>
                        <span>AFILIADOS</span>
                    </div>
                    <img src="../icons/affiliate-marketing-svgrepo-com.svg" alt="" class="icon-painel">
                </div>

                <div class="dado-painel">
                    <div class="info-dado">
                        <h3><span> R$ </span>0<span class="span-data"> de saldo</span></h3>
                        <span>BÔNUS</span>
                    </div>
                    <img src="../icons/sell_black_24dp.svg" alt="" class="icon-painel">
                </div>

                <!-- <div class="dado-painel">
                    <div class="info-dado"> 
                        <h3></h3>
                        <span>GRADUAÇÃO</span>
                    </div>
                    <img src="../icons/shopping_cart_black_24dp.svg" alt="" class="icon-painel">
                </div>

                <div class="dado-painel">
                    <div class="info-dado">
                        <h3>0000</h3>
                        <span>visualizações</span>
                    </div>
                    <img src="../icons/eye-solid.svg" alt="" class="icon-painel">
                </div> -->
            </div>
        </section>

        <section class="administracao">

        </section>

        <section class="painel2">
            <div class="main1">
                <div class="title">
                    <h2>Seus Leads:</h2>
                </div>
                <div class="listagem-tabela">
                    <table class="compras-recentes">
                        <thead>
                            <th>Nome</th>
                            <th>Teleone</th>
                            <!-- <th>Bônus Recebidos</th>
                            <th>status</th> -->
                        </thead>
                        <tbody>
                            <tr>
                                <td>andré</td>
                                <td>3000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="main2">
                <div class="title">
                    <h2>Afiliados</h2>
                </div>
                <ul class="listagem">
                    <li>
                        <img src=".../img/ftperfil.png" alt="André Dutra">
                        <h3 class="name-user-list">
                            André Dutra
                        </h3>
                        <h4>
                            <!-- <span>|</span>
                            Desenvolvedor -->
                        </h4>
                    </li>
                    <li>
                        <img src=".../img/ftperfil.png" alt="André Dutra">
                        <h3 class="name-user-list">
                            André Dutra
                        </h3>
                        <h4>
                            <!-- <span>|</span>
                            Desenvolvedor -->
                        </h4>
                    </li>
                    <li>
                        <img src=".../img/ftperfil.png" alt="André Dutra">
                        <h3 class="name-user-list">
                            André Dutra
                        </h3>
                        <h4>
                            <!-- <span>|</span>
                            Desenvolvedor -->
                        </h4>
                    </li>
                    <li>
                        <img src=".../img/ftperfil.png" alt="André Dutra">
                        <h3 class="name-user-list">
                            André Dutra
                        </h3>
                        <h4>
                            <!-- <span>|</span>
                            Desenvolvedor -->
                        </h4>
                    </li>
                    <li>
                        <img src=".../img/ftperfil.png" alt="André Dutra">
                        <h3 class="name-user-list">
                            André Dutra
                        </h3>
                        <h4>
                            <!-- <span>|</span>
                            Desenvolvedor -->
                        </h4>
                    </li>
                    <li>
                        <img src=".../img/ftperfil.png" alt="André Dutra">
                        <h3 class="name-user-list">
                            André Dutra
                        </h3>
                        <h4>
                            <!-- <span>|</span>
                            Desenvolvedor -->
                        </h4>
                    </li>
                    <li>
                        <img src=".../img/ftperfil.png" alt="André Dutra">
                        <h3 class="name-user-list">
                            André Dutra
                        </h3>
                        <h4>
                            <!-- <span>|</span>
                            Desenvolvedor -->
                        </h4>
                    </li>
                    <li>
                        <img src=".../img/ftperfil.png" alt="André Dutra">
                        <h3 class="name-user-list">
                            André Dutra
                        </h3>
                        <h4>
                            <!-- <span>|</span>
                            Desenvolvedor -->
                        </h4>
                    </li>

                </ul>
            </div>
        </section>


    </main>






    <script src="../js/script.js"></script>
</body>

</html>
<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>seja bem vindo a tela admin</h2>
    <a href="logout.php">sair</a>
</body>
</html> -->
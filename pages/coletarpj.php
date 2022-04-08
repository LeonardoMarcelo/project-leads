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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/animacao.css">
</head>

<body>

<header class="header" id="header">
        <nav class="navbar coletarpjselect">



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
                    </li>
                    <li class="nav__item">
                        <a href="" class="nav__link">
                            <span class="icon">
                                <img src="../icons/diamond_black_24dp.svg" alt="home">
                            </span>
                            <span class="title-namenav">
                                Financeiro
                            </span>
                        </a>
                    </li> -->
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






        <section class="div-title">
            <div class="title">
                <span>Bem Vindo !</span>
                <h1>Colete seu leads PJ aqui:</h1>
            </div>
        </section>
        <section class="painel2 colum">
            <div class="opc-filter">
                <button class="item-filter">Local <img src="../icons/chevron-down-outline.svg" alt=""></button>
                <button class="item-filter">Cnae <img src="../icons/chevron-down-outline.svg" alt=""></button>
                <button class="item-filter">Captal Inicial <img src="../icons/chevron-down-outline.svg" alt=""></button>
            </div>
            <div class="main1">
                <div class="title">
                    <h2>Leads</h2>
                    <span>800</span>
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
        </section>


    </main>






    <script src="../js/script.js"></script>
</body>

</html>
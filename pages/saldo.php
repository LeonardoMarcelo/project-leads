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
        <nav class="navbar saldoselect">



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


        <section class="painel-saldo">

            <div class="painel-info-saldo">

                <div class="dado-painel">
                    <div class="info-dado">
                        <h3><span> R$ </span>0<span class="span-data"> de saldo</span></h3>
                        <span>BÔNUS</span>
                    </div>
                    <img src="../icons/sell_black_24dp.svg" alt="" class="icon-painel">
                </div>

            </div>
        </section>



        <section class="div-title">
            <div class="title">
                <span>Bem Vindo !</span>
                <h1>Faça seu Deposito por aqui:</h1>
            </div>
        </section>
        <section class="painel2 colum">
            <div class="main-pagamento">
                <form action="" class="form-getway">
                    <div class="form-item">
                        <label for="">CPF/CNPJ:</label>
                        <input type="text">
                    </div>
                    <div class="form-item">
                        <label for="">Nome do portador(como impresso no cartão):</label>
                        <input type="text">
                    </div>
                    <div class="form-item">
                        <label for="">Data de validade:</label>
                        <input type="text">
                    </div>
                    <div class="form-item">
                        <label for="">Complete o número do seu cartão:</label>
                        <input type="text">
                    </div>
                    <div class="form-item">
                        <label for="">Código de Segurança:</label>
                        <input type="text">
                    </div>
                    <button class="form__button">Finalizar</button>
                </form>
                <div class="ilustracao-lado">
                    <img src="../img/undraw_online_payments_re_y8f2.svg" alt="">
                </div>

            </div>
        </section>


    </main>






    <script src="../js/script.js"></script>
</body>

</html>
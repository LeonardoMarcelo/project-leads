<?php

include_once '../config/conexao.php';
include_once '../config/config.login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/wesllen.css">
    <title>Login</title>
</head>

<body>
    <main>
        <section class="login__section section">
            <div class="login__container container">
                <img class="img" src="../img/undraw_join_of2w.svg" alt="">
                <?php

                if (!empty($login_err)) {
                    // echo '<div class= "alert alert-danger">' . $login_err . '</div>';
                    echo "<script>alert(`$login_err`)</script>";
                }

                ?>
                <form class="form__content" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <h2 class="welcome__title">Bem Vindo</h2>
                    <h1 class="form__title">Tenha acesso exclusivo a <br> <span>Facilty Software</span></h1>

                    <div class="input__container">
                        <div class="form__div form__div-one">
                            <div class="form__icon">
                                <i class='bx bx-envelope icon'></i>
                            </div>
                           
                                <label for="" class="form__label">Email</label>
                                <input class="form__input" type="email" name="username" id="email" <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?> value="<?php echo $username; ?>">
                                <span class="invalid-feedback"><?php echo $username_err; ?></span>
                        </div>

                        <div class="form__div">
                            <div class="form__icon">
                                <i class='bx bx-key icon'></i>
                            </div>

                                <label for="" class="form__label">Senha</label>
                                <input class="form__input"type="password" name="password" id="password" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>>
                                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        </div>
                    </div>

                    <input type="submit" class="form__button" value="ENTRAR">
                </form>
            </div>
        </section>
    </main>
</body>
</html>
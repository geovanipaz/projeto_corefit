<?php require_once __DIR__ . '/../../constants.php'; 

$username = $_SESSION['signin-data']['username'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COREFIT</title>
    <link rel="stylesheet" href="./src/style.css">
    <!--ICONSCOUT CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.2.0/css/line.css">
</head>

<body>

    <main>

        <div class="main-login">

            <div class="card-login">
                <h1>Core<span>F</span>it</h1>
                <h2>LOGIN</h2>
                <form action="<?= ROOT_URL ?>entrar" method="post" class="form-login">
                    <div class="form-control">

                        <label for="usuario">Usuário</label>
                        <input type="text" class="login-input" value="<?= $username ?>" name="username">
                        <div class="alert__error_form">
                            <?php
                            if (isset($_SESSION['signin']['usuario'])) {
                            ?>

                                <small>
                                    <?= $_SESSION['signin']['usuario'];
                                    unset($_SESSION['signin']);
                                    ?>
                                    <!--<i><img class="img-error" src="src/images/error-icon.svg" alt=""></i> -->
                                </small>

                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-control">
                        <div class="alert__error_form">
                            <label for="password">Senha</label>
                            <input type="password" class="login-input" value="<?= $password ?>" name="senha">
                            <div class="alert__error_form">
                                <?php
                                if (isset($_SESSION['signin']['senha'])) {
                                ?>

                                    <small>
                                        <?= $_SESSION['signin']['senha'];
                                        unset($_SESSION['signin']);
                                        ?>
                                    </small>

                                <?php
                                } else if (isset($_SESSION['signin']['senha-incorreta'])) {
                                ?>
                                    <small>
                                        <?= $_SESSION['signin']['senha-incorreta'];
                                        unset($_SESSION['signin']);
                                        ?>
                                    </small>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn-login">Entrar</button>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="./src/main.js"></script>
    </main>
</body>

</html>
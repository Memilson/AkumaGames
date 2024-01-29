<!DOCTYPE html>
<html lang="pt-br">
<?php
        // Inclui o conteúdo da página PHP diretamente no HTML
        include 'C:\xampp\htdocs\site_erick\php\bancodedados\connect_database.php';
        include 'C:\xampp\htdocs\site_erick\php\bancodedados\verificarseexisteseção.php';
        ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/geral.css">
    <link rel="stylesheet" href="../css/pasta_login/login.css">
    <link rel="stylesheet" href="https://unpkg.com/css.gg@2.0.0/icons/css/menu.css">
    <script src="../js/geral.js"></script>
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <h2 class="login-title">Faça o Login</h2>
            <form action="Automação/verificar_login.php" method="post">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="user_name" required>
                </div>
                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="user_password" required>
                </div>
                <button type="submit" class="enviar-button">Entrar</button>
                <a class="lost-password-link" href="javascript:void(0);" onclick="abrirNovaJanela()">Esqueceu a
                    senha?</a>
            </form>
            <p class="create-account-link">Ainda não tem uma conta? <a href="criarconta.php">Crie uma agora</a></p>
        </div>
    </div>
</body>

</html>
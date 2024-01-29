<!DOCTYPE html>
<html lang="pt-br">
<?php
        // Inclui o conteúdo da página PHP diretamente no HTML
        include 'C:\xampp\htdocs\site_erick\php\bancodedados\connect_database.php';
        include 'C:\xampp\htdocs\site_erick\php\bancodedados\verificarseexisteseção.php';
        include 'C:\xampp\htdocs\site_erick\php\pasta_login\processar_criacao_conta.php';
        ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Criação de Conta</title>
</head>
<body>

    <h2>Criação de Conta</h2>

    <form action="processar_criacao_conta.php" method="post">
        <label for="user_name">Nome:</label>
        <input type="text" name="user_name" required><br>

        <label for="user_email">E-mail:</label>
        <input type="email" name="user_email" required><br>

        <label for="user_password">Senha:</label>
        <input type="password" name="user_password" required><br>

        <label for="user_cpf">CPF:</label>
        <input type="text" name="user_cpf" required><br>

        <label for="user_telefone">Telefone:</label>
        <input type="tel" name="user_telefone" required><br>

        <label for="user_sexo">Sexo:</label>
        <select name="user_sexo" required>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
        </select><br>

        <input type="submit" value="Criar Conta">
    </form>

</body>
</html>

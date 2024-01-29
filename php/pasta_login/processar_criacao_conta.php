<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'C:\xampp\htdocs\site_erick\php\bancodedados\connect_database.php';

// Verificar se os dados do formulário foram recebidos
if (isset($_POST["user_name"], $_POST["user_email"], $_POST["user_password"], $_POST["user_cpf"], $_POST["user_telefone"], $_POST["user_sexo"])) {
    // Obter dados do formulário
    $user_name = $conn->real_escape_string($_POST["user_name"]);
    $user_email = $conn->real_escape_string($_POST["user_email"]);
    $user_password = $conn->real_escape_string($_POST["user_password"]);
    $user_cpf = $conn->real_escape_string($_POST["user_cpf"]);
    $user_telefone = $conn->real_escape_string($_POST["user_telefone"]);
    $user_sexo = $conn->real_escape_string($_POST["user_sexo"]);

    // Inserir dados na tabela "usuarios" usando prepared statement
    $sql = "INSERT INTO usuarios (user_name, user_email, user_password, user_cpf, user_telefone, user_sexo) 
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $user_name, $user_email, $user_password, $user_cpf, $user_telefone, $user_sexo);

    if ($stmt->execute()) {
        echo "Conta criada com sucesso!";
    } else {
        echo "Erro ao criar conta: " . $stmt->error;
    }

    // Fechar a conexão com o banco de dados
    $stmt->close();
} else {
    echo "Dados do formulário incompletos.";
}

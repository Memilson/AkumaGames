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
    <link rel="stylesheet" href="https://unpkg.com/css.gg@2.0.0/icons/css/menu.css">
    <script src="../js/geral.js"></script>
</head>

<body>
    <div class="top-bar">
        <i class="gg-menu"></i>
        <img src="../img/logo/logo.png" alt="Logo" class="logo">
        <div class="search-bar">
            <input type="text" class="search-input" placeholder="O que você procura?">
            <button class="search-button">Pesquisar</button>
        </div>
        <ul class="navg1">
            <li class="navg"><a href="../pasta_carrinho/carrinho.html"><i class="gg-shopping-bag"></i></a></li>
            <li class="navg"><a href="../pasta_login/perfil.html"><i class="gg-user"></i></a></li>
        </ul>
    </div>
    <div class="leftbar">
        <button class="close-leftbar">X</button>
        <ul>
            <li class="navg"><a href="#">Página 3</li>
            <li class="navg"><a href="#">Página 3</li>
            <li class="navg"><a href="#">Página 3</li>
        </ul>
    </div>
</body>

</html>
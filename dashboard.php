<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área do Usuário - AESA Receitas</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/a2d9a66dfb.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="topo">
            <a href="index.html" class="logo">
                <img src="assets/img/logo.png" alt="Logo AESA Receitas">
            </a>
            <div class="busca">
                <input type="text" placeholder="Busque sua receita...">
                <button><i class="fas fa-search"></i> Procurar</button>
            </div>
            <div class="login logado">
                <i class="fas fa-user"></i> 
                <span>Olá, <?= htmlspecialchars($_SESSION['usuario_nome']) ?>!</span>
                <a href="logout.php" class="logout">Sair</a>
            </div>
        </div>
        <nav class="menu">
            <a href="todas_receitas.html">Todas as Receitas</a>
            <a href="bolos_tortas.html">Bolos e Tortas</a>
            <a href="massas.html">Massas</a>
            <a href="bebidas.html">Bebidas</a>
            <a href="doces_sobremesas.html">Doces e Sobremesas</a>
            <a href="lanches.html">Lanches</a>
        </nav>
    </header>

    <main>
        <section class="dashboard">
            <h1>Bem-vindo à sua área, <?= htmlspecialchars($_SESSION['usuario_nome']) ?>!</h1>
            <p>Aqui você pode acessar suas receitas favoritas, editar seu perfil e muito mais.</p>
        </section>
    </main>
</body>
</html>

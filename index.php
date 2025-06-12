<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AESA Receitas</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <script src="https://kit.fontawesome.com/a2d9a66dfb.js" crossorigin="anonymous"></script>
    <style>
        .menu-usuario {
            position: relative;
            display: inline-block;
        }

        .menu-usuario button {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }

        .menu-usuario .dropdown {
            display: none;
            position: absolute;
            right: 0;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            z-index: 10;
        }

        .menu-usuario:hover .dropdown {
            display: block;
        }

        .menu-usuario .dropdown a {
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: #333;
        }

        .menu-usuario .dropdown a:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <header>
        <div class="topo">
            <a href="index.php" class="logo">
                <img src="assets/img/logo.png" alt="Logo AESA Receitas">
            </a>
            <div class="busca">
                <input type="text" placeholder="Busque sua receita...">
                <button><i class="fas fa-search"></i> Procurar</button>
            </div>

            <?php if (isset($_SESSION['usuario_id'])): ?>
                <div class="menu-usuario">
                    <button>☰</button>
                    <div class="dropdown">
                        <a href="sua_receita.php">Enviar receita</a>
                        <a href="logout.php">Sair</a>
                    </div>
                </div>
            <?php else: ?>
                <a href="login.php" class="login">
                    <i class="fas fa-user"></i> <span>Login</span>
                </a>
            <?php endif; ?>
        </div>

        <nav class="menu">
            <a href="todas_receitas.php">Todas as Receitas</a>
            <a href="bolos_tortas.php">Bolos e Tortas</a>
            <a href="massas.php">Massas</a>
            <a href="bebidas.php">Bebidas</a>
            <a href="doces_sobremesas.php">Doces e Sobremesas</a>
            <a href="lanches.php">Lanches</a>
        </nav>
    </header>

    <main>
        <section class="boas-vindas">
            <h1>Bem-vindo ao AESA Receitas!</h1>
            <p>Descubra receitas deliciosas e práticas para o seu dia a dia. Navegue pelas categorias acima e encontre sua próxima refeição favorita!</p>
        </section>
    </main>
</body>
</html>

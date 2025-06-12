<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Todas as Receitas - AESA Receitas</title>
  <link rel="stylesheet" href="assets/css/todas_receitas.css" />
  <script src="https://kit.fontawesome.com/a2d9a66dfb.js" crossorigin="anonymous"></script>
  <style>
    .detalhes {
      display: none;
      margin-top: 10px;
      background: #f9f9f9;
      padding: 10px;
      border-radius: 8px;
      font-size: 0.95em;
      color: #333;
    }
    .menu-usuario {
      position: relative;
      display: inline-block;
    }
    .menu-btn {
      background: none;
      border: none;
      font-size: 22px;
      cursor: pointer;
    }
    .menu-dropdown {
      display: none;
      position: absolute;
      top: 40px;
      right: 0;
      background: white;
      border: 1px solid #ccc;
      border-radius: 6px;
      padding: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      z-index: 1000;
    }
    .menu-dropdown a {
      display: block;
      padding: 5px 10px;
      color: #333;
      text-decoration: none;
    }
    .menu-dropdown a:hover {
      background-color: #f0f0f0;
    }
    .menu-usuario:hover .menu-dropdown {
      display: block;
    }
  </style>
</head>
<body>
  <header>
    <div class="topo">
      <a href="index.php" class="logo">
        <img src="assets/img/logo.png" alt="Logo AESA Receitas" />
      </a>
      <div class="busca">
        <input type="text" placeholder="Busque sua receita..." />
        <button><i class="fas fa-search"></i> Procurar</button>
      </div>

      <?php if (isset($_SESSION['usuario'])): ?>
        <div class="menu-usuario">
          <button class="menu-btn"><i class="fas fa-bars"></i></button>
          <div class="menu-dropdown">
            <a href="sua_receita.php">Enviar receita</a>
            <a href="logout.php">Sair</a>
          </div>
        </div>
      <?php else: ?>
        <a href="login.html" class="login">
          <i class="fas fa-user"></i> <span>Login</span>
        </a>
      <?php endif; ?>
    </div>

    <nav class="menu">
      <a href="todas_receitas.php">Todas as Receitas</a>
      <a href="bolos_tortas.html">Bolos e Tortas</a>
      <a href="massas.html">Massas</a>
      <a href="bebidas.html">Bebidas</a>
      <a href="doces_sobremesas.html">Doces e Sobremesas</a>
      <a href="lanches.html">Lanches</a>
    </nav>
  </header>

  <main>
    <section class="receitas">
      <h1>Todas as Receitas</h1>
      <div class="card-container">

        <div class="card">
          <img src="assets/img/bolo-chocolate.jpg" alt="Bolo de Chocolate" />
          <h3>Bolo de Chocolate</h3>
          <button class="toggle-btn">Veja a receita <i class="fas fa-plus-circle"></i></button>
          <div class="detalhes">
            <strong>Ingredientes:</strong>
            <ul>
              <li>2 xícaras de farinha</li>
              <li>1 xícara de açúcar</li>
              <li>1 xícara de leite</li>
              <li>1/2 xícara de chocolate em pó</li>
              <li>2 ovos</li>
            </ul>
            <strong>Modo de Preparo:</strong>
            <p>Misture todos os ingredientes, asse por 35 minutos a 180°C.</p>
          </div>
        </div>

        <div class="card">
          <img src="assets/img/macarrao.jpg" alt="Macarrão Alho e Óleo" />
          <h3>Macarrão Alho e Óleo</h3>
          <button class="toggle-btn">Veja a receita <i class="fas fa-plus-circle"></i></button>
          <div class="detalhes">
            <strong>Ingredientes:</strong>
            <ul>
              <li>200g de macarrão</li>
              <li>3 dentes de alho</li>
              <li>2 colheres de azeite</li>
              <li>Sal a gosto</li>
            </ul>
            <strong>Modo de Preparo:</strong>
            <p>Cozinhe o macarrão, doure o alho no azeite e misture tudo.</p>
          </div>
        </div>

      </div>
    </section>
  </main>

  <script>
    document.querySelectorAll(".toggle-btn").forEach((btn) => {
      btn.addEventListener("click", () => {
        const detalhes = btn.nextElementSibling;
        const estaAberto = detalhes.style.display === "block";

        detalhes.style.display = estaAberto ? "none" : "block";
        btn.innerHTML = estaAberto
          ? 'Veja a receita <i class="fas fa-plus-circle"></i>'
          : 'Ocultar receita <i class="fas fa-minus-circle"></i>';
      });
    });
  </script>
</body>
</html>

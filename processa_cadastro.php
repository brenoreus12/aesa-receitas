<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $telefone = trim($_POST['telefone']);
    $senha = $_POST['senha'];

    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ? OR telefone = ?");
    $stmt->bind_param("ss", $email, $telefone);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Email ou telefone já cadastrados. <a href='cadastro.php'>Voltar</a>";
        exit;
    }

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, telefone, senha) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $email, $telefone, $senha_hash);
    $resultado = $stmt->execute();

    if ($resultado) {
        header("Location: login.php?cadastro=sucesso");
        exit;
    } else {
        echo "Erro ao cadastrar: " . $conn->error . " <a href='cadastro.html'>Tentar novamente</a>";
    }
} else {
    header("Location: index.html");
    exit;
}

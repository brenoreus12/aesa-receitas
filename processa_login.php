<?php
session_start();
include 'conexao.php'; 

$identificacao = $_POST['identificacao']; 
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = ? OR telefone = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $identificacao, $identificacao);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $usuario = $result->fetch_assoc();

    if (password_verify($senha, $usuario['senha'])) {
        
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];
        echo "<script>alert('Login realizado com sucesso!'); window.location='dashboard.php';</script>";
    } else {
        echo "<script>alert('Senha incorreta.'); history.back();</script>";
    }
} else {
    echo "<script>alert('Usuário não encontrado.'); history.back();</script>";
}

$stmt->close();
$conn->close();
?>

<?php
$host = "sql301.infinityfree.com";   
$usuario = "if0_39165999";          
$senha = "D12L5pcHzo1AV6i";          
$banco = "if0_39165999_climatempo";           

$conn = new mysqli($host, $usuario, $senha, $banco);


if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>

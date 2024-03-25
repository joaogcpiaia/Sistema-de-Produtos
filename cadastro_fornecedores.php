<?php
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $contato = $_POST["contato"];

    $query = "INSERT INTO fornecedores (nome, contato) VALUES (:nome, :contato)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':contato', $contato);

    if ($stmt->execute()) {
        echo "<script>alert('Produto cadastrado com sucesso.');</script>";
    } else {
        echo "Erro ao cadastrar o fornecedor.";
    }
}
?>

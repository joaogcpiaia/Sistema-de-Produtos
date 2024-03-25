<?php
require_once 'conexao.php';

$stmt = $db->prepare($query);
$stmt->execute();
$fornecedores = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($fornecedores);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $fornecedor_id = $_POST["fornecedor_id"];

    $query = "INSERT INTO produtos (nome, preco, fornecedor_id) VALUES (:nome, :preco, :fornecedor_id)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':fornecedor_id', $fornecedor_id);

    if ($stmt->execute()) {
        header("Location: cadastro_produtos.php?success=1");
        exit();
    } else {
        echo "Erro ao cadastrar o produto.";
    }
}
?>

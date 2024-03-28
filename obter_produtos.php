<?php
require_once 'conexao.php';

$query = "SELECT produtos.id, produtos.nome, produtos.preco, fornecedores.id AS fornecedor_id, fornecedores.nome AS nome_fornecedor
          FROM produtos
          INNER JOIN fornecedores ON produtos.fornecedor_id = fornecedores.id";

$stmt = $db->query($query);
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($produtos);
?>

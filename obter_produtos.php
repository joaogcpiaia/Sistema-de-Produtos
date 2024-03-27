<?php
// Incluir o arquivo de conexão com o banco de dados
require_once 'conexao.php';

// Consulta SQL para obter os dados dos produtos juntamente com o nome e o ID do fornecedor
$query = "SELECT produtos.id, produtos.nome, produtos.preco, fornecedores.id AS fornecedor_id, fornecedores.nome AS nome_fornecedor
          FROM produtos
          INNER JOIN fornecedores ON produtos.fornecedor_id = fornecedores.id";

// Preparar e executar a consulta
$stmt = $db->query($query);
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Retornar os dados dos produtos em formato JSON
echo json_encode($produtos);
?>

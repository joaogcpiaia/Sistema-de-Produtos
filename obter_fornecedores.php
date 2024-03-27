<?php
// Inclua o arquivo de conexão com o banco de dados
require_once 'conexao.php';

// Consulte o banco de dados para obter os dados dos fornecedores
$query = "SELECT * FROM fornecedores";
$stmt = $db->query($query);
$fornecedores = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Retorne os dados dos fornecedores em formato JSON
header('Content-Type: application/json');
echo json_encode($fornecedores);
?>

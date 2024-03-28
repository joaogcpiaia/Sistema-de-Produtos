<?php
require_once 'conexao.php';

$query = "SELECT * FROM fornecedores";
$stmt = $db->query($query);
$fornecedores = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($fornecedores);
?>

<?php
class Fornecedor {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function cadastrarFornecedor($nome, $contato) {
        $query = "INSERT INTO fornecedores (nome, contato) VALUES (:nome, :contato)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':contato', $contato);
        return $stmt->execute();
    }
}
?>

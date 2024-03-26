<?php
class Produto {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function cadastrarProduto($nome, $preco) {
        $query = "INSERT INTO produtos (nome, preco) VALUES (:nome, :preco)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':preco', $preco);
        return $stmt->execute();
    }
}
?>

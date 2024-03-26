<?php
class User {
    private $db;
    public function __construct($db) {
        $this->db = $db;}

    public function createUser($username, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO usuarios (nome, senha) VALUES (:username, :password)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        return $stmt->execute();}

    public function getUserById($id) {
        $query = "SELECT * FROM usuarios WHERE id_usuario = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);}
}
?>
<?php

class Database {
    private $host = "localhost";
    private $db_name = "authentification";
    private $username = "root";
    private $password = "";
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Erreur de connexion: " . $exception->getMessage();
        }
    }
    public function getConn() {
        return $this->conn;
    }
    public function closeconnect(){
        $this ->conn = null;
    }

}
?>
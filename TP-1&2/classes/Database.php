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

    public function registerUser($user) {
        try {
            $query = "INSERT INTO utilisateur (NOM_UTILISATEUR, MOT_DE_PASSE, REGION, TYPE_COMPTE) VALUES (:username, :password, :region, :type_compte)";

            // Préparation de la requête
            $stmt = $this->conn->prepare($query);

            // Nettoyage des données
            $username = htmlspecialchars(strip_tags($user->getNom()));
            $password = htmlspecialchars(strip_tags($user->getPassword()));
            $region = htmlspecialchars(strip_tags($user->getRegion()));
            $type_compte = ($user instanceof Admin) ? 'admin' : 'abonne';

            // Liaison des paramètres
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':region', $region);
            $stmt->bindParam(':type_compte', $type_compte);

            // Exécution de la requête
            if($stmt->execute()) {
                return true;
            }

            return false;
        } catch(PDOException $exception) {
            echo "Erreur lors de l'enregistrement: " . $exception->getMessage();
        }
    }
}

?>

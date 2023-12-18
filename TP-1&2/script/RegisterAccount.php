<?php
    require 'DataBase.php';
    require '../classes/Abonne.php';
    require '../classes/Admin.php';
    require '../classes/Utilisateur.php';

    class UserManager {
        private $db;
       
        public function __construct() {
            $this->db = new Database();
        }

    public function registerUser($user) {
        try {
            $query = "INSERT INTO utilisateur (NOM,`PASSWORD_USER`,REGION,LIBELLE_ROLE) VALUES (:registerUsername, :registerPassword, :region, :type_compte)";

            // Préparation de la requête
            $stmt = $this->db->getConn()->prepare($query);

            // Nettoyage des données
            $username = htmlspecialchars(strip_tags($user->getNom()));
            $password = htmlspecialchars(strip_tags($user->getPassword()));
            $region = htmlspecialchars(strip_tags($user->getRegion()));
            $type_compte = ($user instanceof Admin) ? 'admin' : 'abonne';

            // Liaison des paramètres
            $stmt->bindParam(':registerUsername', $username);
            $stmt->bindParam(':registerPassword', $password);
            $stmt->bindParam(':region', $region);
            $stmt->bindParam(':type_compte', $type_compte);

            // Exécution de la requête
            if($stmt->execute()) {
                $stmt->closeCursor();
                return true;  
            }

            return false;
        } catch(PDOException $exception) {
            echo "Erreur lors de l'enregistrement: " . $exception->getMessage();
        }
    }
}

?>

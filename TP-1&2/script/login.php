<?php
require '../script/Database.php';

class Login {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }


    public function checkLogin($username, $password) {
        try {
            $query = "SELECT * FROM utilisateur WHERE NOM = :loginUsername LIMIT 1";

            // Préparation de la requête
            $stmt = $this->db->getConn()->prepare($query);

            // Nettoyage des données
            $username = htmlspecialchars(strip_tags($username));

            // Liaison des paramètres
            $stmt->bindParam(':loginUsername', $username);

            // Exécution de la requête
            $stmt->execute();

            if($stmt->rowCount() == 1) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                // Vérifiez le mot de passe
                if(password_verify($password, $row['MOT_DE_PASSE'])) {
                    return $row; // Retourne les informations de l'utilisateur
                } else {
                    return false; // Le mot de passe ne correspond pas
                }
            } else {
                return false; // L'utilisateur n'existe pas
            }

        } catch(PDOException $exception) {
            echo "Erreur de connexion: " . $exception->getMessage();
        }
    }
}

// Créez une instance de Login et vérifiez les informations de connexion
$login = new Login();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];

    $result = $login->checkLogin($username, $password);
    if($result) {
        echo "Nom: " . $result['NOM_UTILISATEUR'] . "<br>";
        echo "Région: " . $result['REGION'] . "<br>";
        echo "Prix Abonnement: " . $result['PRIX_ABO'] . "€<br>";
    } else {
        echo "Connexion échouée.";
    }
}
?>

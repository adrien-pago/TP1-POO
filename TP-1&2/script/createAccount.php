<?php
require '../classes/Utilisateur.php';
require '../classes/Admin.php';
require '../classes/Abonne.php';
require '../classes/Database.php'; // Assurez-vous d'avoir une classe pour gérer les interactions avec la base de données

// Vérifiez que le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $region = $_POST['region'];
    $accountType = $_POST['accountType'];

    // Créez une instance de la classe Database pour gérer les interactions avec la base de données
    $db = new Database();

    // Vérifiez le type de compte et créez l'objet utilisateur correspondant
    if ($accountType == 'admin') {
        $user = new Admin($username, $password, $region);
    } else {
        $user = new Abonne($username, $password, $region);
    }

    // Enregistrez l'utilisateur dans la base de données
    if ($db->registerUser($user)) {
        echo "Compte créé avec succès.";
        // Redirigez vers la page de connexion ou d'accueil
    } else {
        echo "Erreur lors de la création du compte.";
    }
}
?>

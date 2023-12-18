<?php
require 'RegisterAccount.php';
require '../classes/Abonne.php';
require '../classes/Admin.php';
require '../classes/Utilisateur.php';


// Vérifiez que le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ... récupération des données du formulaire ...

    $userManager = new UserManager();

    // Vérifiez le type de compte et créez l'objet utilisateur correspondant
    if ($accountType == 'admin') {
        $user = new Admin($username, $password, $region);
    } else {
        $user = new Abonne($username, $password, $region);
    }

    // Enregistrez l'utilisateur dans la base de données
    if ($userManager->registerUser($user)) {
        echo "Compte créé avec succès.";
    } else {
        echo "Erreur lors de la création du compte.";
    }
}

?>

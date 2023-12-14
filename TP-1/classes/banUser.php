<?php
    require_once 'Utilisateur.php';
    require_once 'Admin.php';

    //verif Admin 'pierre' pour l'exemple
    $admin = new Admin('Pierre', 'abcdef'); 
    $admin->setBan($usernameToBan);
    echo "L'utilisateur $usernameToBan a été banni.";
    $bannedUsers = $admin->getBannedUsers();

    echo "Liste des utilisateurs bannis:<br>";
    foreach ($bannedUsers as $user) {
        echo $user . "<br>";
    }
    header('Location: admin.php'); 
    exit();

?>

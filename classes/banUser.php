<?php
require_once 'classes/Utilisateur.php';
require_once 'classes/Admin.php';

//verif Admin 'pierre' pour l'exemple
$admin = new Admin('Pierre', 'abcdef'); 

$usernameToBan = $_POST['usernameToBan'];


$admin->setBan($usernameToBan);

echo "L'utilisateur $usernameToBan a été banni.";
?>

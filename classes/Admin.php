<?php
require_once 'Utilisateur.php';

class Admin extends Utilisateur {
    // Propriétés spécifiques à Admin

    public function __construct($nomUtilisateur, $motDePasse) {
        parent::__construct($nomUtilisateur, $motDePasse);
    }

    // Méthodes spécifiques à Admin (bannir un utilisateur, etc.)
}
?>

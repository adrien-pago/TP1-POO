<?php
class Utilisateur {
    private $nomUtilisateur;
    private $motDePasse;
    // Autres propriétés

    public function __construct($nomUtilisateur, $motDePasse) {
        $this->nomUtilisateur = $nomUtilisateur;
        $this->motDePasse = $motDePasse;
    }

    // Getters et setters
    // Autres méthodes (connexion, déconnexion, etc.)
}
?>


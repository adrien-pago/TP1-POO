<?php
    // Définition de l'interface Utilisateur
    interface Utilisateur {
        public function getNom();
        public function setPrixAbo();
        public function getPrixAbo();
       
        public const ABONNEMENT = 15;  // Constante représentant le coût de l'abonnement
    }
?>

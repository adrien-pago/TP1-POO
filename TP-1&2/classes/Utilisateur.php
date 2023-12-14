<?php
    interface Utilisateur {
        public function getNom();
        public function setPrixAbo();
        public function getPrixAbo();
        public const ABONNEMENT = 15;
        public function __toString();
    }
?>


<?php
    // Classe Admin implémentant l'interface Utilisateur
    class Admin implements Utilisateur {
        // Déclaration des propriétés
        protected $user_name;
        protected $user_region;
        protected $prix_abo;
        protected $user_pass;
        protected static $ban;

        // Constructeur
        public function __construct($n, $p, $r){
            $this->user_name = strtoupper($n);
            $this->user_pass = $p;
            $this->user_region = $r;
        }

        // Méthodes implémentées de l'interface
        public function getNom(){
            echo $this->user_name;
        }
        public function getPrixAbo(){
            echo $this->prix_abo;
        }

        // Gestion des utilisateurs bannis
        public function setBan(...$b) {
            foreach($b as $banned){
                self::$ban[] = $banned;
            }
        }
        public function getBan(){
            echo 'Utilisateur bannis par ' . $this->user_name . ' : ';
            foreach(self::$ban as $valeur){
                echo $valeur . ', ';
            }
        }

        // Définition du prix d'abonnement basé sur la région
        public function setPrixAbo(){
            if($this->user_region === 'Sud'){
                $this->prix_abo = Utilisateur::ABONNEMENT;
            }else{
                $this->prix_abo = Utilisateur::ABONNEMENT / 2;
            }
        }

        // Méthode toString pour afficher les informations de l'Admin
        public function __toString() {
            return "Nom: " . $this->user_name . ", Région: " . $this->user_region . ", Prix Abo: " . $this->prix_abo . "€\n";
        }
    }
?>

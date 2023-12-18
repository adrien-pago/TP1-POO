<?php
    // Classe Abonne implémentant l'interface Utilisateur
    class Abonne implements Utilisateur {
        // Propriétés protégées accessibles dans la classe 
        protected $user_name;  
        protected $user_region; 
        protected $prix_abo;   

        // Propriété privée accessible seulement dans cette classe
        private $user_pass;     

        // Constructeur pour initialiser un nouvel objet Abonne
        public function __construct($n, $p, $r) {
            $this->user_name = $n;   
            $this->user_pass = $p;    
            $this->user_region = $r;  
        }

        // Méthode pour obtenir le nom de l'utilisateur
        public function getNom() {
            echo $this->user_name;
        }

        // Méthode pour afficher le prix de l'abonnement
        public function getPrixAbo() {
            echo $this->prix_abo;
        }

        // Méthode pour définir le prix de l'abonnement
        public function setPrixAbo() {
            // Si l'utilisateur est dans la région 'Sud', appliquer une réduction de 50%
            if ($this->user_region === 'Sud') {
                return $this->prix_abo = Utilisateur::ABONNEMENT / 2;
            } else {
                // Sinon, appliquer le tarif normal
                return $this->prix_abo = Utilisateur::ABONNEMENT;
            }
        }

        // Méthode magique __toString pour afficher les informations de l'abonné
        public function __toString() {
            return "Nom: " . $this->user_name . ", Région: " . $this->user_region . ", Prix Abo: " . $this->prix_abo . "€\n";
        }

        public function enregistrer() {
            // Code pour enregistrer l'abonné dans la base de données
        }
        // ...
    }
?>

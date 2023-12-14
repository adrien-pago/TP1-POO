<?php
    class Abonne implements Utilisateur{
        protected $user_name;
        protected $user_region;
        protected $prix_abo;
        private $user_pass;

        public function __construct($n, $p, $r){
            $this->user_name = $n;
            $this->user_pass = $p;
            $this->user_region = $r;
        }

        public function getNom(){
            echo $this->user_name;
        }
        public function getPrixAbo(){
            echo $this->prix_abo;
        }

        public function setPrixAbo(){
            if($this->user_region === 'Sud'){
                return $this->prix_abo = Utilisateur::ABONNEMENT /2;
            }else{
                return $this->prix_abo = Utilisateur::ABONNEMENT;

            }
         }
         
        public function __toString(){
            echo $this( $n, $p, $r);
        }
     }
?>
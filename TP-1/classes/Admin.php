<?php
    require_once 'Utilisateur.php';

    session_start();
    class Admin extends Utilisateur {
        protected $ban;

        public function setBan($userToBan) {
            $_SESSION['bannedUsers'][] = $userToBan;
        }

        public function getBan(){
            echo'Utilisateur bannis par' .$this->user_name. ' : ';
            foreach($this->ban as $valeur){
                echo $valeur .', ';
            }
        }

        public function getBannedUsers() {
            return $_SESSION['bannedUsers'] ?? [];
        }

    }


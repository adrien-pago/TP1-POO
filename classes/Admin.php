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
<<<<<<< HEAD
// script
=======
>>>>>>> f9f49837f422fb1fe22d2eb14cb631b57f63e255

?>

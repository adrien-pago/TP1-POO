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
<<<<<<< HEAD:TP-1/classes/Admin.php
<<<<<<< HEAD
// script
=======
>>>>>>> f9f49837f422fb1fe22d2eb14cb631b57f63e255

=======
>>>>>>> 319582ec0c5b6affb1aa341daca23d9dc34e7fe9:classes/Admin.php
?>

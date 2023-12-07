<?php
require_once 'classes/Utilisateur.php';
require_once 'classes/Admin.php';

$username = $_POST['username'];
$password = $_POST['password'];


if ($username == 'Pierre' && $password == 'abcdef') {
    $user = new Admin($username, $password);
   
} else {
    $user = new Utilisateur($username, $password);
   
}

?>

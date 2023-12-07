<!doctype html>
<html>
    <head>
        <title> Cours PHP & MySQL  </title>
        <meta charset ="utf-8">
        <meta name="viewport"
            content="width=device, initial-scale=1, user-qcalable=no">
            <link rel="stylesheet" href="cours.css">
    </head>  

    <body>
        <h1>Bannissement</h1>
        <form action="banUser.php" method="post">
            Nom de l'utilisateur à bannir: <input type="text" name="usernameToBan"><br>
            <input type="submit" value="Bannir">
        </form>
        <?php
        require_once 'Utilisateur.php';
        require_once 'Admin.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        //pour l'exemple on met pierre en admin le seul à pouvoir bannir
        if ($username == 'Pierre' && $password == 'abcdef') {
            $user = new Admin($username, $password);
        
        } else {
            $user = new Utilisateur($username, $password);
        
        }

        ?>
   </body>
</html>
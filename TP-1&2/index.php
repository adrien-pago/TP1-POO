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
        <h1>Connexion</h1>
        <form action="classes/login.php" method="post">
            Nom d'utilisateur: <input type="text" name="username"><br>
            Mot de passe: <input type="password" name="password"><br>
            <input type="submit" value="Se connecter">
        </form>


        <?php
            require 'classes/Utilisateur.php';
            require 'classes/Admin.php';
            require 'classes/Abonne.php';

            $pierre = new Admin('Pierre', 'abcdef', 'Sud');
            $mathilde =new Admin('Math', 123456, 'Nord');
            $Florian =new Abonne('Flo', 'flotri','Est');

            $pierre->setPrixAbo();
            $mathilde->setPrixabo();
            $Florian->setPrixabo();


            $listeUtilisateurs = [$pierre, $mathilde, $Florian];

            // Afficher la liste des utilisateurs
            foreach ($listeUtilisateurs as $utilisateur) {
                echo $utilisateur;
                echo '<br>';
            }
        ?>
        <p>Un paragraphe</p>
    </body>
</html>

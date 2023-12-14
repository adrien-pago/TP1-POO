<!doctype html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="stylesheet" href="cours.css">
    </head>  

    <body>
        <!-- Formulaire de connexion -->
        <h1>Connexion</h1>
        <form action="classes/login.php" method="post">
            Nom d'utilisateur: <input type="text" name="username"><br>
            Mot de passe: <input type="password" name="password"><br>
            <input type="submit" value="Se connecter">
        </form>

        <?php
            // Inclusion des classes
            require 'classes/Utilisateur.php';
            require 'classes/Admin.php';
            require 'classes/Abonne.php';

            // Création des objets utilisateurs
            $pierre = new Admin('Pierre', 'abcdef', 'Sud');
            $mathilde = new Admin('Math', 123456, 'Nord');
            $Florian = new Abonne('Flo', 'flotri', 'Est');

            // Définition du prix d'abonnement pour chaque utilisateur
            $pierre->setPrixAbo();
            $mathilde->setPrixAbo();
            $Florian->setPrixAbo();

            // Création d'une liste d'utilisateurs et affichage
            $listeUtilisateurs = [$pierre, $mathilde, $Florian];
            foreach ($listeUtilisateurs as $utilisateur) {
                echo $utilisateur;
                echo '<br>';
            }
        ?>
        <p>Un paragraphe</p>
    </body>
</html>

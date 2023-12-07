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
        <form action="classes\login.php" method="post">
            Nom d'utilisateur: <input type="text" name="username"><br>
            Mot de passe: <input type="password" name="password"><br>
            <input type="submit" value="Se connecter">
        </form>


        <?php
            require_once 'classes\Utilisateur.php';
            require_once 'classes\Admin.php';

            $pierre = new Admin('Pierre', 'abcdef');
            $mathilde =new Utilisateur('Math', 123456);

            echo $pierre->getNom(). '<br>';
            echo $mathilde->getNom(). '<br>';

            $pierre->setBan('paul');
            $pierre->setBan('Jean');
            echo $pierre->getBan()
        ?>.
        <p>Un paragraphe</p>
    </body>
</html>

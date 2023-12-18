<!doctype html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="stylesheet" href="style.css">
    </head>  

    <body>
        <!-- Formulaire de connexion -->
        <h1>Connexion</h1>
        <form action="classes/login.php" method="post">
            Nom d'utilisateur: <input type="text" name="loginUsername"><br>
            Mot de passe: <input type="password" name="loginPassword"><br>
            <input type="submit" value="Se connecter">
        </form>

        <!-- Ajout d'un bouton pour ouvrir la fenêtre modale -->
        <button id="btnCreateAccount">Créer un compte</button>

        <!-- Fenêtre modale de création de compte -->
        <div id="modalCreateAccount" style="display:none;">
            <form action="/script/createAccount.php" method="post">
                Nom d'utilisateur: <input type="text" name="registerUsername"><br>
                Mot de passe: <input type="password" name="registerPassword"><br>
                Région: <input type="text" name="region"><br>
                Type de compte:
                <select name="accountType">
                    <option value="admin">Admin</option>
                    <option value="abonne">Abonné</option>
                </select><br>
                <input type="submit" value="Créer un compte">
            </form>
        </div>

        <script>
            document.getElementById('btnCreateAccount').onclick = function() {
                document.getElementById('modalCreateAccount').style.display = 'block';
            };
        </script>


        <?php
            // Inclusion des classes
            require 'classes/Utilisateur.php';
            require 'classes/Admin.php';
            require 'classes/Abonne.php';

            // créer une liste de tout les utilisateur enregistrer en base de donné pour avoir un aperçu des personne enregistré

        ?>
    </body>
</html>

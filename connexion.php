<?php

require 'controllers/registred.php';

?>

<?php if (isset($_GET['not'])): ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="css/nav.css">
            <link rel="stylesheet" href="css/connexion.css">
            <script src="js/pwdVisibility.js"></script>
        </head>
        <body>
            <?php require_once 'template/nav.php' ?>
            <form action="formSubmit.php" method="post">
                <div>
                    <label for="name">Nom d'utilisateur :</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div>
                    <label for="password">Mot de passe :</label>
                    <div class="pwd">
                        <input type="password" name="password" id="password" required>
                        <img src="img/beholder.png" alt="beholder" onclick="visibility()">
                        <p>Afficher</p>
                    </div>
                </div>
                <div>
                    <label for="email">Adresse mail :</label>
                    <input type="email" name="email" id="email">
                </div>
                <input type="submit" value="S'inscrire">
                <div>
                    <p><a class="inscription" href="connexion.php">Si vous avez déjà un compte, cliquez ici.</a></p>
                </div>
            </form>
        </body>
    </html>
<?php else : ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="css/connexion.css">
            <link rel="stylesheet" href="css/nav.css">
            <script src="js/pwdVisibility.js" defer></script>
        </head>
        <body>
            <?php require_once 'template/nav.php'?>
            <form action="controllers/session.php" method="POST">
                <div>
                    <label for="name">Nom d'utilisateur :</label>
                    <input type="text" class="name" name="name" required>
                </div>
                <div>
                    <label for="password">Mot de passe :</label>
                    <div class="pwd">
                        <input type="password" class="password" id="password" name="password" required>
                        <img src="img/beholder.png" alt="beholder" onclick="visibility()">
                        <p>Afficher</p>
                    </div>
                </div>
                <?php if (isset($_GET['fail'])):?>
                    <p class="error">Votre mot de passe ou votre identifiant est incorrect.</p>
                <?php endif ?>
                <input type="submit" value="Connexion">
                <div>
                    <p><a class="inscription" href="connexion.php?not">Si vous n'avez pas encore de compte, cliquez ici.</a></p>
                </div>
            </form>
        </body>
    </html>
<?php endif ?>
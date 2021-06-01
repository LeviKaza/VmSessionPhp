<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/connexion.css">
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
                <input type="password" class="pwd" name="password" required>    
            </div>
            <?php if (isset($_GET['fail'])):?>
                <p class="error">Votre mot de passe ou votre identifiant est incorrect.</p>
            <?php endif ?>
            <input type="submit" value="Connexion">
        </form>
    </body>
</html>
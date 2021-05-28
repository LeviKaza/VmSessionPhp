<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/connexion.css">
    </head>
    <body>
        <?php require_once 'template/nav.php'?>
        <form action="">
            <div>
                <label for="name">Nom d'utilisateur :</label>
                <input type="text" class="name" name="name">
            </div>
            <input type="submit" value="Connexion">
        </form>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/nav.css">
    </head>
    <body>
        <?php require_once "template/nav.php" ?>
        <form action="formSubmit.php" method="POST">
            <div>
                <label for="name">Nom :</label>
                <input type="text" class="name" name="name" required>
            </div>
            <div>
                <label for="birthday">Age :</label>
                <input type="number" class="birthday" name="age">
            </div>
            <div>
                <label for="mail">Email :</label>
                <input type="email" class="mail" name="mail">
            </div>
            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" class="pwd" name="password" required>
            </div>
            <input type="submit" class="submit" value="OK">
        </form>
    </body>
</html>
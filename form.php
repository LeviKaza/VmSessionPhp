<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/form.css">
    </head>
    <body>
        <?php require_once "template/nav.php" ?>
        <form action="formSubmit.php" method="POST">
            <div>
                <label for="name">Nom :</label>
                <input type="text" class="name" name="name">
            </div>
            <div>
                <label for="birthday">Age :</label>
                <input type="number" class="birthday" name="age">
            </div>
            <div>
                <label for="mail">Email :</label>
                <input type="email" class="mail" name="mail">
            </div>
            <input type="submit" class="submit" value="OK">
        </form>
    </body>
</html>
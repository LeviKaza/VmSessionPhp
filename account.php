<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/account.css">
    </head>
    <body>
        <?php require_once 'template/nav.php' ?>
        <div class="all">
            <?php if (isset($_SESSION['name'])): ?>
                <p>Bonjour!</p>
            <?php else : ?>
                <?php require 'template/unothaurised.php' ?>
            <?php endif ?>
        </div>
    </body>
</html>
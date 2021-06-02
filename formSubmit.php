<?php

$_SESSION['name'] = $_POST['name'];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/formSubmit.css">
        <link rel="stylesheet" href="css/nav.css">
    </head>
    <body>
        <?php require_once 'template/nav.php' ?>
        <p>Bienvenue <?= $_POST['name']; ?>,</p>
        <br>
        <p>Nous avons envoyer un mail de vérification à <?= $_POST["mail"]; ?>.</p>
    </body>
</html>
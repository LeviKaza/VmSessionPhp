<?php

//session_start();

$_SESSION['name'] = $_POST['name'];

//var_dump($_SESSION);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php require_once 'template/nav.php' ?>
        <p>Bienvenue <?= $_POST['name']; ?>,</p>
        <br>
        <p>Nous avons envoyer un mail de vérification à <?= $_POST["mail"]; ?>.</p>
    </body>
</html>
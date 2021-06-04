<?php

require 'registred.php';

session_start();
foreach($registred as $value) {
    if ($_POST['name'] === $value['name']) {
        if (hash("sha256", $_POST['password'], $binary = false) === $value['password']) {
            $_SESSION['name'] = $_POST['name'];
            header('Location: /');
            break;
        }
    }
    else {
        header('Location: ../connexion.php?fail');
    }
}
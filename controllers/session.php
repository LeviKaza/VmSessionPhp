<?php

require 'registred.php';

session_start();
foreach($registred as $value) {
    if ($_POST['name'] === $value['name']) {
        if (hash("md5", $_POST['password'], $binary = false) === hash("md5", $value['password'], $binary = false)) {
            $_SESSION['name'] = $_POST['name'];
            header('Location: /');
            break;
        }
    }
    else {
        header('Location: ../connexion.php?fail');
    }
}
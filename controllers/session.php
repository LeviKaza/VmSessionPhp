<?php

$registred = [
    [
        "name" => "Jean",
        "password" => "JeanCorentin"
    ],
    [
        "name" => "Romuald",
        "password" => "F*ckthepwd123"
    ],
    [
        "name" => "Jon",
        "password" => "altair"
    ]
];

session_start();
foreach($registred as $value) {
    if ($_POST['name'] === $value['name']) {
        if ($_POST['password'] === $value['password']) {
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['password'] = $_POST['password'];
            header('Location: /');
            break;
        }
    }
    else {
        header('Location: ../connexion.php?fail');
    }
}
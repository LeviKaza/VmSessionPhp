<?php

$registred = [
    [
        "name" => "Jean",
        "password" => "JeanCorentin"
    ],
    [
        "name" => "Levi",
        "password" => "LeviKazama"
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
        }
    }
    else {
        header('Location: ../connexion.php');
    }
}
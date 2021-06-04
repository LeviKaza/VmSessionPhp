<?php

$registred = [
    [
        "name" => "Jean",
        "password" => "JeanCorentin",
        "color" => "Rouge",
        "age" => "35"
    ],
    [
        "name" => "Romuald",
        "password" => hash("sha256", "F*ckthepwd123", $binary = false),
        "color" => "Vert",
        "age" => "12"
    ],
    [
        "name" => "Jon",
        "password" => "altair",
        "color" => "Jaune",
        "age" => "25"
    ]
];

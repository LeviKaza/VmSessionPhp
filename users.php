<?php

// $name = ""
// $age = 00;
// $array = ["", 00, ""]
// $obj = {}
// $bool = true;//false
// $null = null;

// $calc = 45 + 56;
// echo $calc . '<br>';

$users = [
    ["name" => "marc",
    "color" => "vert",
    "age" => 34],
    ["name" => "paulette",
    "color" => "bleu",
    "age" => 90],
    ["name" => "eskarina",
    "color" => "octarine",
    "age" => 13]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/users.css">
    <link rel="stylesheet" href="css/nav.css">
    <title>PHP</title>
<head>
<body>
    <?php require_once 'template/nav.php'?>
    <div>        
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Color</th>
                    <th>Age</th>
                </tr>
            </thead>
            <?php foreach ($users as $user): ?>
            <tbody>
                <tr>
                    <td><?= $user["name"] ?></td>
                    <td><?= $user["color"] ?></td>
                    <td><?= $user["age"] ?></td>
                </tr>
            </tbody>
            <?php endforeach?>
        </table>
    </div>
</body>
</html>

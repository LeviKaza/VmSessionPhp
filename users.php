<?php

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

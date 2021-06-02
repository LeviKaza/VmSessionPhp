<?php

require 'controllers/registred.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/users.css">
    <link rel="stylesheet" href="css/nav.css">
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
            <?php foreach ($registred as $user): ?>
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

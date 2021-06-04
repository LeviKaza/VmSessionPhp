<?php

require_once 'template/nav.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/nav.css">
    </head>
    <body>
        <p><?= date("d/m/Y") ?></p>
        <p><?= date("H:i:s") ?></p>
        <p><?= hash("sha256", "F*ckthepwd123", $binary = false ) ?></p>
        <p><?= hash("sha256", "JeanCorentin", $binary = false)?></p>
        <p><?= hash("sha256", "altair", $binary = false) ?></p>
    </body>
</html>

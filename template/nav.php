<?php

session_start();
//var_dump($_SESSION);

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/nav.css">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Acceuil</a></li>
                    <li><a href="users.php">Utilisateurs</a></li>
                    <li><a href="form.php">Inscription</a></li> 
                    <?php
                    if (isset($_SESSION['name'])) {
                        echo "<li>";
                        echo "<p>Bonjour " . $_SESSION['name'] . "</p>";
                        echo "<a href='controllers/deconnexion.php'>Deconnexion</a>";
                        echo "</li>";
                    }
                    else {
                        echo "<li><a href='connexion.php'>Connexion</a></li>";
                    }
                    ?>
                </ul>
            </nav>
        </header>
    </body>
</html>
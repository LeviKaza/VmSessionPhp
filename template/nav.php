<?php

session_start();

?>

<header>
    <nav>
        <ul>
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="users.php">Utilisateurs</a></li>
            <li><a href="form.php">Inscription</a></li> 
            <?php if (isset($_SESSION['name'])): ?>
                <li class="unroll"><a><?= $_SESSION['name'] ?></a>
                    <ul class="none">
                        <li><a href="controllers/deconnexion.php">Deconnexion</a></li>
                    </ul>
                </li>
            <?php else: ?>
                <li><a href='connexion.php'>Connexion</a></li>
            <?php endif ?>
        </ul>
    </nav>
</header>
<!DOCTYPE html>
<html data-theme="dark">


<head>
    <title>Mon Site</title>
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>inc/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>

<body>
    <header>
        <div class="conteneur">
            <div>
                <a href="" title="Mon Site">MonSite.com</a>
            </div>
            <nav aria-label="breadcrumb">
                <ul>
                    <?php
                    if (internauteEstConnecteEtEstAdmin()) {
                        echo '<li><a href="' . RACINE_SITE . 'admin/gestion_membre.php">Gestion des membres</a></li>';
                        echo '<li><a href="' . RACINE_SITE . 'admin/gestion_commande.php">Gestion des commandes</a></li>';
                        echo '<li><a href="' . RACINE_SITE . 'admin/gestion_boutique.php">Gestion de la boutique</a></li>';
                    }

                    if (internauteEstConnecte()) {
                        echo '<li><a href="' . RACINE_SITE . 'profil.php">Voir votre profil</a></li>';
                        echo '<li><a href="' . RACINE_SITE . 'boutique.php">Accès à la boutique</a></li>';
                        echo '<li><a href="' . RACINE_SITE . 'panier.php">Voir votre panier</a></li>';
                        echo '<li><a href="' . RACINE_SITE . 'connexion.php?action=deconnexion">Se déconnecter</a></li>';
                    } else {
                        echo '<li><a href="' . RACINE_SITE . 'inscription.php">Inscription</a></li>';
                        echo '<li><a href="' . RACINE_SITE . 'connexion.php">Connexion</a></li>';
                        echo '<li><a href="' . RACINE_SITE . 'boutique.php">Accès à la boutique</a></li>';
                        echo '<li><a href="' . RACINE_SITE . 'panier.php">Voir votre panier</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <section>
        <div class="conteneur">
<?php

/**
 * FORM HTML
 */
include_once 'components/head.html';
include_once 'components/form_dialogue.html';




/**
 * PHP SQL
 */
$connection = new Mysqli('localhost', 'root', '', 'dialogue');

if ($_POST) {
    $_POST['pseudo'] = addslashes($_POST['pseudo']);
    $_POST['message'] = addslashes($_POST['message']);
    if (!empty($_POST['pseudo']) && !empty($_POST['message'])) {
        $connection->query(
            "INSERT INTO commentaire (pseudo,            message,      date_enregistrement)
             VALUES              ('$_POST[pseudo]', '$_POST[message]',      NOW())"
        )
            or DIE($connection->error);
        echo '<div class="validation">Votre message a bien été enregistré.</div>';
    } else {
        echo '<div class="erreur">Afin de déposer un commentaire, veuillez svp remplir tous les champs du formulaire.</div>';
    }
}

$limiter = 0;
$résultat = $connection->query("SELECT * FROM commentaire");
while ($commentaire = $résultat->fetch_assoc()) {
    echo '<div class="message">';
    echo '<div class="titre">Par: ' . $commentaire['pseudo'] . ', ' . $commentaire['date_enregistrement'] . '</div>';
    echo '<div class="contenu">' . $commentaire['message'] . '</div>';
    echo '</div>';
    $limiter++;
    if ($limiter > 100){
        break;
    }
}
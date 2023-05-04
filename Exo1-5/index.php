<?php



include 'form.html';


$connection = new Mysqli('localhost', 'root', '', 'securite');

if ($_POST) {
    //echo "pseudo posté: $_POST[pseudo] <br>";
//echo "mdp posté: $_POST[mdp] <br>";
    $req = "SELECT * FROM membre WHERE pseudo='$_POST[pseudo]' AND mdp='$_POST[mdp]'";
    $résultat = $connection->query($req);
    echo 'requete debug : ' . $req . '';
    $membre = $résultat->fetch_assoc();
    echo $membre;
    if (!empty($membre)) {
        echo '<div class="validation"><h1>Vous êtes bien reconnu par le site web pour vous connecter...</h1></div>';
        echo "votre id est : " . $membre['id_membre'] . "<br>";
        echo "votre pseudo est : " . $membre['pseudo'] . "<br>";
        echo "votre mdp est : " . $membre['mdp'] . "<br>";
        echo "votre nom est : " . $membre['nom'] . "<br>";
        echo "votre prenom est : " . $membre['prenom'] . "<br>";
        echo "votre email est : " . $membre['email'] . "<br>";
    } else {
        echo '<div class="erreur"><h1>Erreur d\'identification</h1></div>';
    }
}
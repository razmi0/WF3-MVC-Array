<?php



echo "Hello MySQL!" . "<br>";
$mySql = new mysqli("localhost", "root", "", "entreprise");

// echo '<pre>'; print_r($mySql); echo '</pre>';
// echo '<pre>'; print_r(get_class_methods($mySql)); echo '</pre>';
// $mySql->query("mauvaise requete volontaire .........");
// echo $mySql->error . '<br>';



// CREATION QUERY
//--

// $result est faux si la requête est fausse, vrai si la requête est vraie
// $result = $mySql->query(
// "INSERT INTO employe 
//                      (prenom,   nom,    sexe,    service,    date_embauche, salaire) 
// VALUES               ('thomas', 'cuesta', 'm','informatique',  '2015-07-30',  5000)");


// echo $mySql->affected_rows . ' enregistrement(s) affecté(s) par la requête INSERT<br>';
// echo $result;


// $result = $mySql->query(
// "INSERT INTO employe (prenom, nom, sexe, service, date_embauche, salaire) VALUES
// ('Jean-pierre', 'Laborde', 'm', 'direction', '1999-12-09', 5000),
// ('Clement', 'Gallet', 'm', 'commercial', '2000-01-15', 2300),
// ('Thomas', 'Winter', 'm', 'commercial', '2000-05-03', 3550),
// ('Chloe', 'Dubar', 'f', 'production', '2001-09-05', 1900),
// ('Elodie', 'Fellier', 'f', 'secretariat', '2002-02-22', 1600),
// ( 'Fabrice', 'Grand', 'm', 'comptabilite', '2003-02-20', 1900),
// ( 'Melanie', 'Collier', 'f', 'commercial', '2004-09-08', 3100),
// ( 'Laura', 'Blanchet', 'f', 'direction', '2005-06-09', 4500),
// ( 'Guillaume', 'Miller', 'm', 'commercial', '2006-07-02', 1900),
// ('Celine', 'Perrin', 'f', 'commercial', '2006-09-10', 2700),
// ( 'Julien', 'Cottet', 'm', 'secretariat', '2007-01-18', 1390),
// ( 'Mathieu', 'Vignal', 'm', 'informatique', '2008-12-03', 2000),
// ( 'Thierry', 'Desprez', 'm', 'secretariat', '2009-11-17', 1500),
// ( 'Amandine', 'Thoyer', 'f', 'communication', '2010-01-23', 1500),
// ( 'Damien', 'Durand', 'm', 'informatique', '2010-07-05', 2250),
// ( 'Daniel', 'Chevel', 'm', 'informatique', '2011-09-28', 1700),
// ('Nathalie', 'Martin', 'f', 'juridique', '2012-01-12', 3200),
// ('Benoit', 'Lagarde', 'm', 'production', '2013-01-03', 2550),
// ( 'Emilie', 'Sennard', 'f', 'commercial', '2014-09-11', 1800),
// ('Stephanie', 'Lafaye', 'f', 'assistant', '2015-06-02', 1775)");





// Modification (UPDATE) :
// $result = $mysqli->query(
//     "UPDATE employes 
//     SET salaire = 2500 
//     WHERE id_employes = 802
// ");

// echo $mysqli->affected_rows . ' enregistrement(s) affecté(s) par la requête UPDATE<br>';



if ($_POST) {
    $result = $mySql->query(
        "INSERT INTO employe 
        (     prenom,           nom,           sexe,           service,          date_embauche,             salaire)
VALUES   ('$_POST[prenom]','$_POST[nom]', '$_POST[sexe]', '$_POST[service]', '$_POST[date_embauche]', '$_POST[salaire]')"
    );

    echo '<div style="background: green; padding: 5px;">l\'employé a bien été ajouté</div>';
}

// AFICHAGE
//--

$result = $mySql->query("SELECT * FROM employe");


echo "<table><tr>";
while ($colonne = $result->fetch_field()) {
    echo "<th>" . $colonne->name . "</th>";
}
echo "</tr>";

while ($employe = $result->fetch_assoc()) {
    echo "<tr>";
    foreach ($employe as $key => $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>

<style>
    table {
        border-collapse: collapse;
        box-shadow: inset 2px 5px 5px black;
    }

    td,
    th {
        border: 1px solid;
        padding: 5px;
        background: #f2f2f2;
    }

    th {
        background: #e2e2e2;
    }
</style>

<!-- 
<form method="post">
    <label for="prenom">Prenom</label><br>
    <input type="text" name="prenom" placeholder="prenom" id="prenom" required=""><br><br>
    <label for="prenom">Nom</label><br>
    <input type="text" name="nom" placeholder="nom" id="nom" required=""><br><br>
    <label for="sexe">Sexe</label><br>
    Homme <input type="radio" name="sexe" placeholder="sexe" id="sexe" value="m" checked=""> -
    Femme <input type="radio" name="sexe" placeholder="sexe" id="sexe" value="f"> <br><br>
    <label for="service">Service</label><br>
    <input type="text" name="service" placeholder="service" id="service"><br><br>
    <label for="date_embauche">Date d'embauche <i>(Format: AAAA-MM-JJ)</i></label><br>
    <input type="text" name="date_embauche" placeholder="ex: 2015-07-30" id="prenom"><br><br>
    <label for="salaire">Salaire</label><br>
    <input type="text" name="salaire" placeholder="salaire" id="salaire"><br><br>
    <input type="submit"><br><br>
</form> -->
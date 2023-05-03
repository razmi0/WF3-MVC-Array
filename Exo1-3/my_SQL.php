<?php



// Connexion à la base de données
//--
$pdo = new PDO(
    'mysql:host=localhost;dbname=entreprise',
    'root',
    '',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
);

//--
// $pdo est une variable représentant 1 objet issu de la classe Pdo
// $pdo est une variable permettant d'être connecté à la base et de formuler des requêtes
//--

echo '<pre>' . print_r($pdo) . '</pre>';
echo '<pre>' . print_r(get_class_methods($pdo)) . '</pre>';

//--
// Requête de sélection (SELECT) :
//--
$result = $pdo->query("SELECT * FROM employe WHERE prenom");


//--
// Insertion (INSERT) :
//--
$result = $pdo->exec("INSERT INTO employe (prenom, nom, sexe, service, date_embauche, salaire)
                        VALUES ('prenom', 'nom', 'm', 'informatique','2015-07-30', 5000)");
echo $result . ' enregistrement(s) affecté(s) par la requête INSERT<br>';


//--
// Modification (UPDATE) :
//--
$result = $pdo->exec("UPDATE employe SET salaire = 2500 WHERE prenom = 'prenom'");
echo $result . ' enregistrement(s) affecté(s) par la requête UPDATE<br>';



$result = $pdo->query("SELECT * FROM employe");
while ($employe = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<pre>";
    print_r($employe);
    echo "</pre>";
    echo "Bonjour je suis $employe[prenom] $employe[nom] du service $employe[service]";
}
echo $result->rowCount() . ' enregistrement(s) récupéré(s) par la requête SELECT' . '<br>';
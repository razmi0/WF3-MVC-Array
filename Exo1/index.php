<?php

//Exercice 1
//--
//Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...";
//--
function exo1(): string
{

    for ($i = 0; $i <= 150; $i++) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
}



//Exercice 2
//--
//Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers
//--
function exo2(): string
{

    for ($i = 0; $i <= 5; $i++) {
        echo "Je dois faire des sauvegardes
              régulières de mes fichiers <br>";
    }
}


//Exercice 3
//--
//Ecrire un script qui affiche la table de multiplication pour les nombres de 1 à 9 dans un tableau HTML,
//--

echo "<table>";
multiplication(1);
echo "</table>";

function multiplication($num): void
{
    for ($j = 0; $j <= 9; $j++) {
        for ($i = 0; $i <= 9; $i++) {
            $calc = $i * $num;
            echo "<tr><td>" . $calc . "</td></tr>";
        }
    }
}

// echo exo3();
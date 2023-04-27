<?php

include "view/view.php";
include "model/model.php";
include "controller/controller.php";



view_style();
model_variables();




//Exercice 1
//--
$datetime = DateTime::createFromFormat($format, $date);
$weekOfTheYear = $datetime->format('W');

//Exercice 2
//--
$duree = $maintenant->diff(DateTime::createFromFormat($format, $finFormation));
$dureeAvantFinFormation = $duree->format(' %a days');

//Exercice 3
//--
$isBissextile = isBissextile($datetime) ? "Yes" : "No";

//Exercice 4
//--
$testedDate = isRealDate($date, $format);

//Exercice 5
//--
$hourFormated = $datetime->format($hourFormat);

//Exercice 6
//--
$dateMonthAdded = $maintenant->add(new DateInterval('P1M'))->format($format);

//Exercice 7
//--
$dateFromSeconds = DateTime::createFromFormat('U', $secondsElapsed);

// Bonus
//--
$dayOfTheWeek = $datetime->format('l');
$dayOfTheYear = $datetime->format('z');




view_template([
    ["Date raw", $date],
    ["Format", $format],
    ["Week number", $weekOfTheYear],
    ["Durée avant fin formation", $dureeAvantFinFormation],
    ["Day of the week", $dayOfTheWeek],
    ["Day of the year", $dayOfTheYear],
    ["Is bissextile ? ", $isBissextile],
    ["Tested date", $testedDate],
    ["Hour formated", $hourFormated],
    ["Date with one month added", $dateMonthAdded],
    ["Date from seconds", $dateFromSeconds->format($format)],
]);
<?php
// path : index.php

include "model/model.php";
include "view/view.php";
include "controller/controller.php";




model_variables();
view_style();
$linkTemplate = generateLink($link,$title);
$resultat = arraySum($tab);
$isComplex = complexEnough($password);
view_template([
    [$resultat, $numeroExercice2],
    [$isComplex, $numeroExercice3],
    [$linkTemplate, $numeroExercice1]
]);


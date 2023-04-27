<?php
// MODEL
// Path: model\model.php
//--


/**
 * Insert variables in the index.php
 * @return void
 */
function model_variables(): void
{
    global $tab;
    global $link;
    global $title;
    global $password;
    global $numeroExercice1;
    global $numeroExercice2;
    global $numeroExercice3;
    $numeroExercice1 = "Exercice 1";
    $numeroExercice2 = "Exercice 2";
    $numeroExercice3 = "Exercice 3";
    $tab = [4, 3, 8, 2];
    $link = "https://www.google.com";
    $title = "Google";
    $password = "123456AZEaze";

}
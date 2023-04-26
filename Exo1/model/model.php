<?php

// Model
// Path: model\model.php
//--


/**
 * Export model variables
 * @return void
 */
function model_variables(): void
{
    global $max_multiplier;
    global $scale;
    global $limiter;
    global $cap;
    global $pair;
    global $catch_phrase;
    $max_multiplier = 25;
    $scale = 1;
    $limiter = 10;
    $cap = 10;
    $pair = false;
    $catch_phrase = "Je dois faire des sauvegardes";
}
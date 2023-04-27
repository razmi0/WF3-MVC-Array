<?php



function model_variables(): void
{
    global $maintenant;
    global $date;
    global $format;
    global $hourFormat;
    global $wrongDate;
    global $finFormation;
    global $secondsElapsed;
    $maintenant = new DateTime();
    $date = "14/07/2022";
    $format = "d/m/Y";
    $hourFormat = "H\hi";
    $wrongDate = "32/17/2019";
    $finFormation = '16/06/2023';
    $secondsElapsed = "1000200000";
}
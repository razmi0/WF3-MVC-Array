<?php

// CONTROLLER
// path : controller/controller.php
//--

/**
 * Display numberq
 * @param int $cap is the range
 * @param bool $pair is the boolean to display even or odd numbers
 * @return void
 */
function exercice_1(int $cap, bool $pair) :void {
    for ($i = 0; $i <= $cap; $i++) {
        if ($pair && $i % 2 == 0) {
            echo $i . " ";
        } else {
            if (!$pair && $i % 2 != 0) {
                echo $i . " ";
            }
        }
    }
}

/**
 * Display a string
 * @param int How many times to display the string
 * @param string The string to display
 * @return void
 */
function exercice_2(int $limiter,string $catch_phrase) :void {
    for ($i = 0; $i <= $limiter; $i++) {
        echo "<p>" . $catch_phrase . "</p>";
    }
}

/**
 * Get the multiplication table function 
 * @param mixed $scale like a log
 * @param mixed $max_multiplier
 * @return void
 */
function exercice_3($scale, $max_multiplier) :void {
    multiplication($scale, $max_multiplier);
}


/**
 * Generate a multiplication table
 * @param int $scale
 * @param int $max_multiplier
 * @return void
 */
function multiplication(int $scale, int $max_multiplier): void
{
    echo "<table>";
    for ($j = 1; $j <= $max_multiplier; $j++) {
        echo "<tr>";
        for ($i = 1; $i <= $max_multiplier; $i++) {
            $calc = $i * $j *  $scale;
            echo "<td>" . $calc . "</td>";
        }
    }
    echo "</table>";

}
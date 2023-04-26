<?php

//CONTROLLER
//path : controller/controller.php

/**
 * Do the exercice 1
 * @param array $array
 * @return void
 */
function exercice_1(array $array): void
{
    echo "<h1>Exercice 1</h1>";
    echo "<div class='container'>";
    viewArray($array);
    arsort($array);
    viewArray($array);
    echo "</div>";
}
/**
 * Do the exercice_2
 * @param array $array
 * @return void
 */
function exercice_2(array $array): void
{
    echo "<h1>Exercice 2</h1>";
    echo "<div class='container'>";
    ksort($array);
    viewArray($array);
    $flipped_array = array_flip($array);
    viewArray($flipped_array);
    echo "Capitales size : " . count($flipped_array);
    echo "<br><br>";
    $new_array = array_filter($flipped_array, function ($item) {
        return strpos($item, 'B') !== 0;
    });
    viewArray($new_array);
    echo "</div>";
}
/**
 * Do the exercice_3
 * @param array $array
 * @return void
 */
function exercice_3(array $array): void
{
    echo "<h1>Exercice 3</h1>";
    echo "<div class='container'>";
    ksort($array);
    viewArray($array);
    viewArray($array, 2);
    echo "</div>";
}
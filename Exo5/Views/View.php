<?php


include 'HTML/Head_html.php';
include 'HTML/Body_html.php';




/**
 * Insert template in the view
 * @param array $array
 * @return void
 */
function view_template(array $array) : void
{
    echo "<ul>";
        foreach ($array as $value) {
            echo " <li> {$value[0]} :  {$value[1]}</li>";
        }
    echo "</ul>";
}

/**
 * Summary of view_array
 * @param array $array
 * @param int $flag
 * @return void
 */
function view_array(array $array, int $flag = 1): void
{
    echo "<table>";
    foreach ($array as $key => $value) {
        echo "<tr>";
        echo "<th class='key' scope='col'>" . $key . "</th>";
        if (is_array($value)) {
            if ($flag === 1) {
                foreach ($value as $val) {
                    echo "<td class='val'>" . $val . "</td>";
                }
            } elseif ($flag === 2) {
                echo "<td class='val'>" . count($value) . "</td>";
            }
        } else {
            echo "<td class='val'>" . $value . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>  <br> <br>";
}
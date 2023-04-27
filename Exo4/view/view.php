<?php
// VIEW
// path : "view/view.php"
//--



/**
 * Insert style in the view
 * @return void
 */
function view_style() : void {
    echo "<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    ul {
        border: 1px solid black;
        list-style-type: none;
        display : flex;
        flex-direction: column;
        justify-content: space-around;
        width : fit-content;
        align-items: center;
        padding : 30px;
        margin : 30px;
    }
    li {
        padding: 20px;
    }
    tr {
        display : flex;
        flex-direction : column;
        margin : 2px 5px;
        padding : 5px 2px;
        text-align : center;
    }
    .key {
        border : solid 1px red;
    }
    .val {
        border : solid 1px blue;
    }
    </style>";
}


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

function viewArray(array $array, int $flag = 1): void
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
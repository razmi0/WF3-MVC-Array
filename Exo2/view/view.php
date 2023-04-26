<?php

// View
// Path: view\view.php

/**
 * insert styling for viewArray
 * @return void
 */
function style():void {
    echo
    "<style>
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
        .container {
            display : flex;
            flex-direction : row;
            justify-content : space-around;
        }
    </style>";
}


/**
 * viewArray display 1 and 2 lvl deep arrays
 * @param array $array
 * @param int $flag = 1 print two deep array's values, $flag = 2 print the length
 * @return void
 */

 function viewArray(array $array, int $flag = 1): void
 {
     echo "<table>";
     foreach ($array as $key => $value) {
         echo "<tr>";
         echo "<th class='key' scope='col'>" . $key . "</th>";
         if (is_array($value)) {
             if ($flag === 1) {
                 // echo "<tr>";
                 foreach ($value as $val) {
                     // echo "<tr>";
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
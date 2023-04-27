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
        flex-direction: column-reverse;
        justify-content: space-around;
        width : fit-content;
        align-items: center;
        padding : 30px;
        margin : 30px;
    }
    li {
        padding: 20px;
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
            echo " <li> {$value[1]} :  {$value[0]}</li>";
        }
    echo "</ul>";
}


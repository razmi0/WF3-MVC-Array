<?php

// View
// Path: view\view.php


/**
 * insert styling for viewArray
 * @return void
 */
function view_style():void {
    echo
    "<style>
        table {
            border : solid 1px red;
            padding : 5px 3px;
            text-align : center;
        }
        td {
            border : solid 1px blue;
            padding : 5px 3px;
            margin : 5px 3px;
        }

    </style>";
}

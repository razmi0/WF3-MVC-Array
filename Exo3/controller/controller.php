<?php


//CONTROLLER
// path : controller/controller.php
//--


/**
 * Generate a link
 * @param string $link
 * @param string $title
 * @return string
 */
function generateLink(string $link,string $title) : string {
    return "<a href='$link'>$title</a>";
}

/**
 * Sum of an array of integer
 * @param array $array
 * @return int
 */
function arraySum(array $array) : int {
    $sum = 0;
    foreach ($array as $value) {
        if (!is_int($value)) {
            $value = 0;
        }
        $sum += $value;
    }
    return $sum;
}

/**
 * Check if a password is complex enough
 * @param string $password
 * @return bool
 */
function complexEnough(string $password): string {
    $complexEnough = false;
    $message = "";
    if (strlen($password) < 8) {
        $complexEnough = false;
    }
    if (!preg_match('/[0-9]/', $password)) {
        $complexEnough = false;
    }
    if (!preg_match('/[A-Z]/', $password)) {
        $complexEnough = false;
    }
    if (!preg_match('/[a-z]/', $password)) {
        $complexEnough = false;
    }
    $complexEnough ? $message = "Complex & Valid" : $message = "Simple & Invalid";
    return $message;
}

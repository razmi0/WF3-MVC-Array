<?php
// Form_VALIDATORS
// Path: controllers\Form\form_validation.php
//--



/**
 * Verify if the input is empty
 * @param string $value
 * @return bool
 */
function isInputEmpty(string $value): bool
{
    $error = false;
    if (empty($value)) {
        $error = true;
    }
    return $error;
}

/**
 * Verify if the input is null
 * @param string $value
 * @return bool
 */
function isInputNull(string $value): bool
{
    $error = false;
    if (is_null($value)) {
        $error = true;
    }
    return $error;
}

/**
 * @description Vérifie la validité d'un input de type text
 * @param string $value
 * @return bool error
 */

function isTextValid(string $value): bool
{
    $error = false;

    // TEST REG EXP TYPE TEXT
    if (!preg_match('/^[a-zA-Z0-9_]+$/', $value)) {
        $error = true;
    }
    return $error;
}

/**
 * Verify if the input is valid email
 * @param string $value
 * @return bool error
 */

function isEmailValid($value) : bool
{

    $error = false;
    if (!preg_match('/^[0-9a-zA-Z-.$#]+@[0-9a-zA-Z-$#]+.[a-zA-Z]{2,5}$/', $value)) {
        $error = true;
    }
    return $error;

}
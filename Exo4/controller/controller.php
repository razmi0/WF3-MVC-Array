<?php




function isBissextile($datetime) : string {
    $datetime->setDate($datetime->format('Y'), 2, 29);
    return $datetime->format('d/m/Y') === "29/02/".$datetime->format('Y');
}

function isRealDate($date, $format) : string {
    DateTime::createFromFormat($format, $date);
    $errors = DateTime::getLastErrors();
    if (!$errors) {
        return "Date is valid";
    }
    // 
    view_template([
        ["Errors", implode(" " , $errors['errors'])],
        ["Warnings", implode(" " , $errors['warnings'])],
    ]);
    return "Date is not valid";
}




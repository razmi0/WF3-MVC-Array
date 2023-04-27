<?php
// Get Form Data
// path = controllers/Form/get_form_data.php
//--

include 'models/Sql_columns.php';

$columns = getDbColumns();

function getData(array $columns): array
{

    $firstname = $_GET[$columns[0]] ?? null;
    $password = $_GET[$columns[1]] ?? null;
    $email = $_GET[$columns[2]] ?? null;
    $message = $_GET[$columns[3]] ?? null;
    return [
        $firstname,
        $password,
        $email,
        $message
    ];
}


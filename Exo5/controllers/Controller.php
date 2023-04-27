<?php

// Get data ask for the SQL columns names (path : Models/Sql_columns.php)
// Those columns names are used to get the data from the form (path : Controllers/Form/Get_data.php)
include 'Form/Get_data.php';
include 'Form/Form_validation.php';

// Form data collection
//--
$data = getData($columns);

// Form Validation
//--



// Form Data view
//--
view_template([
    ['firstname', $data[0]],
    ['password', $data[1]],
    ['email', $data[2]],
    ['message', $data[3]]
]);
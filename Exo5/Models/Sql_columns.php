<?php

function getDbColumns(): array
{

    $input_firstname_name = 'firstname';
    $input_password_name = 'password';
    $input_email_name = 'email';
    $input_message_name = 'message';
    return [
        $input_firstname_name,
        $input_password_name,
        $input_email_name,
        $input_message_name
    ];
}
<?php

class Validation
{
    public static function email_validation($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function validatePassword($password)
    {
        // Here's an example that checks if the password is at least 8 characters long
        return strlen($password) >= 8;
    }

    public static function validateField($field)
    {
        // Here's an example that checks if the field is not empty
        return !empty($field);
    }
}
$email = "admin@test.com";
$password = "passsssss123";
$field = "";

if (Validation::email_validation($email)) {
    echo "Email is valid <br>";
} else {
    echo "Email is invalid <br>";
}

if (Validation::validatePassword($password)) {
    echo "Password is valid.</br>";
} else {
    echo "Password is invalid <br>";
}

if (Validation::validateField($field)) {
    echo "Field is valid.</br>";
} else {
    echo "Field is invalid.</br>";
}

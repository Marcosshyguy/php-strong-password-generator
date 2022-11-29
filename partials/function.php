<?php
// function that get letteres ald symbols according to the typed number
function getRandomPassword($user_length)
{
    $password = "";
    $password_samples_unit = "abcdefghilmnopqrstuvzxjywABCDEFGHILMNOPQRSTUVZXJYW1234567890?=)(/&%#";
    for ($i = 0; $i < $user_length; $i++) {
        $random_numba = mt_rand(0, (Strlen($password_samples_unit) - 1));
        $password .= $password_samples_unit[$random_numba];
    }
    $_SESSION["password"] = $password;
    return $password;
}

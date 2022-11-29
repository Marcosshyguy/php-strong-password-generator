<?php
// function that get letteres ald symbols according to the typed number

//---> fare magari un controllo con isset e non funzione anche perche poi bisogna chiamere dentro tutti i dati sringa che qui sono dentro
function getRandomPassword($user_length)
{
    $letter = "abcdefghilmnopqrstuvzxjyw";
    $numba = "1234567890";
    $symbol = "?=)(/&%#";
    $password = "";
    $password_samples_sum = $letter . strtoupper($letter) . $numba . $symbol;
    for ($i = 0; $i < $user_length; $i++) {
        $random_numba = mt_rand(0, (Strlen($password_samples_sum) - 1));
        $password .= $password_samples_sum[$random_numba];
    }
    $_SESSION["password"] = $password;
    return $password;
}

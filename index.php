<?php $password_length = intval($_GET["password_length"]);
var_dump($password_length);

// function that get letteres ald symbols according to the typed number
function getRandomPassword($user_length)
{
    $password = "";
    $password_samples_unit = "abcdefghilmnopqrstuvzxjyw1234567890?=)(/&%#";
    for ($i = 0; $i < $user_length; $i++) {

        $random_numba = mt_rand(0, (Strlen($password_samples_unit) - 1));

        $password .= $password_samples_unit[$random_numba];
    }
    return $password;
}


echo getRandomPassword($password_length)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Password Generator</title>
</head>

<body>
    <h1 class="h1 text-center">Strong Password Generator</h1>
    <div class="container">
        <form action="index.php" method="get">
            <label for="password_length">Lunghezza password:</label>
            <input type="number" id="password_length" name="password_length">
        </form>
    </div>
</body>

</html>
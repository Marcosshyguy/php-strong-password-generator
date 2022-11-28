<?php
session_start();
include_once __DIR__ . "/partials/function.php";
$password_length = intval($_GET["password_length"]) ?? 0;

if ($_SESSION["password_length"] > 0 && $_SESSION["password_length"] <= 16) {


    $_SESSION["password"] = getRandomPassword($_SESSION["password_length"]);
}
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
        <form action="./session/your_password.php" method="get">
            <label for="password_length">Lunghezza password:</label>
            <input type="number" id="password_length" name="password_length">
            <div>
                <button type="submit">Invia</button>
                <button type="reset">Annulla</button>
            </div>

        </form>
    </div>
</body>

</html>
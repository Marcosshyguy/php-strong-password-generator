<?php
session_start();
include_once __DIR__ . "/partials/function.php";
$password_length = $_GET["password_length"] ?? '';
intval($password_length);

if (!empty($password_length)) {
    if ($password_length > 0 && $password_length <= 16) {

        getRandomPassword($password_length);
        $_SESSION["rewq"] = getRandomPassword($password_length);
        header("Location: ./session/your_password.php");
    } else {
        $_SESSION["rewq"] = "la password non corrisponde al numero di caratteri richiesto";
        //--> questo redirect non è necessario ma sarebbe meglio visualizzare il tutto con un messaggio in index
        header("Location: ./session/your_password.php");
    }

    //-->aggiungere parte con else per errore
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
        <form action="index.php" method="get">
            <label for="password_length">Lunghezza password:</label>
            <input type="number" id="password_length" name="password_length">
            <div>
                <button type="submit">Invia</button>
                <button type="reset">Annulla</button>
            </div>
            <div>
                <p>Consenti ripetizione di uno o più caratteri</p>
                <input type="radio" id="repeat" name="repeat" value="repeat">
                <label for="repeat">Si</label><br>
                <input type="radio" id="repeat" name="repeat" value="no_repeat">
                <label for="repeat">No</label><br>
            </div>
            <div>
                <p>Scegli quali caratteri usare</p>
                <!-- usiamo in name un stringa che poi presi dentro un array con la chiamata Get -->
                <input type="checkbox" name="caratteri[]" id="letter" value="letter">
                <label for="letter">Lettere</label>
                <br>
                <input type="checkbox" name="caratteri[]" id="number" value="number">
                <label for="number">Numeri</label>
                <br>
                <input type="checkbox" name="caratteri[]" id="symbol" value="symbol">
                <label for="symbol">Simboli</label>
            </div>
        </form>
    </div>

</body>

</html>
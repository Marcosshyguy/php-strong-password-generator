<?php session_start();
//-->sarebbe da mettere un conreollo con iiseet su sesssion che se è not redirectare lutente a index.html
if (!isset($_SESSION["rewq"])) {
    header("Location: ../index.php");
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
    <title>Your password</title>
</head>

<body>
    <h2>La tua a password è <?php echo $_SESSION["rewq"]; ?></h2>
    <a href="logout.php">Logout</a>

</body>

</html>
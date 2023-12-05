<?php

$passwordSondaggio = "passwordSondaggio";
$passwordGrafico = "passwordGrafico";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $passwordInserita = $_POST['password'];
    $username = $_POST['username'];


    $nomeFileJSON = 'utenti.json';
    $utenti = [];

    if (file_exists($nomeFileJSON)) {
        $jsonContent = file_get_contents($nomeFileJSON);
        $utenti = json_decode($jsonContent, true);
    }

    $utenti[] = ['username' => $username];

    $jsonData = json_encode($utenti, JSON_PRETTY_PRINT);


    file_put_contents($nomeFileJSON, $jsonData);


    if ($passwordInserita === $passwordSondaggio) {

        header("Location: sondaggio.php");
        exit();
    } elseif($passwordInserita === $passwordGrafico){
        header("Location: graph/graphs.php");
        exit();
    }
    else{
        $messaggioErrore = "Password errata. Riprova.";
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesso al Sondaggio</title>
    <link rel="stylesheet" href="styleIndex.css">

</head>

<body>

<div>
    <h2>Accesso al Sondaggio</h2>

    <?php
    if (isset($messaggioErrore)) {
        echo "<p style='color: red;'>$messaggioErrore</p>";
    }
    ?>

    <form method="post" action="">

        <label for="username" style='color: #F6AA1C;'>Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password" style='color: #F6AA1C;'>Password:</label>
        <input type="password" id="password" name="password" required>

        <br>
        <button type="submit">Accedi al Sondaggio</button>
    </form>
</div>

</body>
</html>
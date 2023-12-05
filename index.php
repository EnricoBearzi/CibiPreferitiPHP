<?php

$passwordCorretta = "passwordsegreta";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $passwordInserita = $_POST['password'];

    if ($passwordInserita === $passwordCorretta) {
        header("Location: sondaggio.php");
        exit();
    } else {
        $messaggioErrore = "Password errata. Riprova.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesso al Sondaggio</title>
</head>
<body>

<div>
    <h2>Accesso al Sondaggio</h2>

    <?php
    // Mostra il messaggio di errore se presente
    if (isset($messaggioErrore)) {
        echo "<p style='color: red;'>$messaggioErrore</p>";
    }
    ?>

    <form method="post" action="">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Accedi al Sondaggio</button>
    </form>
</div>

</body>
</html>
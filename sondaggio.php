<?php
    if(!isset($numeroSondaggio)) {
        $numeroSondaggio = 0;
    } else {
        $numeroSondaggio++;
    }
    echo $numeroSondaggio;
?>

<!DOCTYPE html>
<html lang="en"> <!-- TO-DO Vedere della lingua -->
    <head>
        <link rel="stylesheet" href="main.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div class="mainDiv">
            <h1>Domanda</h1>
            <form>
                <div>
                    <input type="radio" id="s1" name="sondaggio">
                    <label class="selectDiv" for="s1">SASSO</label>

                    <input type="radio" id="s2" name="sondaggio">
                    <label class="selectDiv" for="s2">SASSO</label>
                    
                    <input type="radio" id="s3" name="sondaggio">
                    <label class="selectDiv" for="s3">SASSO</label>
                    
                    <input type="radio" id="s4" name="sondaggio">
                    <label class="selectDiv" for="s4">SASSO</label>
                </div>
                <div>
                    <submit class="selectDiv">NEXT</button>
                </div>
            </form>
        </div>
    </body>
</html>
<?php
    $json_data = file_get_contents("data.json");
    $data = json_decode($json_data, true);
    
    $antipasti = $data["Antipasti"];
    $primi = $data["Primi"];
    $contorni = $data["Contorni"];
    $secondi = $data["Secondi"];
    $dessert = $data["Dessert"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphs - Admin</title>
</head>
<body>
    
    <?php
        foreach($data as $category => $array)
        {
            echo "<h1><b>Category: ".$category." </b></h1>";
            foreach($array as $food => $value)
            {
                echo "<b>Food: </b>".$food." <b>Value: </b>".$value." <br>";
            }
            echo "<br><br>";
        }
    ?>

</body>
</html>
<?php
    
    $json_data = file_get_contents("data.json");
    $data = json_decode($json_data, true);

    if(isset($_POST["numeroSondaggio"])) {
        $numeroSondaggio = $_POST["numeroSondaggio"];
    }

    if(isset($_POST["sondaggio"])) {
        $sondaggio = $_POST["sondaggio"];
        
        $tempCnt = 0;
     
        foreach($data as $category => $array)
        {
            if($tempCnt == $numeroSondaggio) {

                $cnt = 0;

                foreach($array as $food => $value)
                {
                    
                    if(cnt == $sondaggio) {
                        $value = 50;
                    }
                    $cnt++;
                }
            }
            $tempCnt++;
        }



        /*foreach($data as $category => $array)
        {
            echo "<h1><b>Category: ".$category." </b></h1>";
            foreach($array as $food => $value)
            {
                $value++;
                echo "<b>Food: </b>".$food." <b>Value: </b>".$value." <br>";
            }
            echo "<br><br>";
        }*/
        
    }

    $antipasti = $data["Antipasti"];
    $primi = $data["Primi"];
    $contorni = $data["Contorni"];
    $secondi = $data["Secondi"];
    $dessert = $data["Dessert"];

    if(!isset($numeroSondaggio)) {
        $numeroSondaggio = 0;
    } else {
        $numeroSondaggio++;
    }

    $tempCnt = 0;
    $categoryFinal;
    $foodFinal = array();

    foreach($data as $category => $array)
    {
        if($tempCnt == $numeroSondaggio) {
            $categoryFinal = $category;

            foreach($array as $food => $value)
            {
                $foodFinal[] = $food;
            }
        }
        $tempCnt++;
    }

    //echo $numeroSondaggio;
    //echo $categoryFinal;
    //print_r($foodFinal);

?>

<!DOCTYPE html>
<html lang="it"> <!-- TO-DO Vedere della lingua -->
    <head>
        <link rel="stylesheet" href="main.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div class="mainDiv">
            <h1> <?php echo $categoryFinal ?> </h1>
            <form action= <?php if($numeroSondaggio<4){ echo "sondaggio.php";} ?> method="post">
                <div>
                    <input type="radio" id="s1" name="sondaggio" value="0" required>
                    <label class="selectDiv" for="s1"><?php echo $foodFinal[0] ?></label>

                    <input type="radio" id="s2" name="sondaggio" value="1" required>
                    <label class="selectDiv" for="s2"><?php echo $foodFinal[1] ?></label>
                    
                    <input type="radio" id="s3" name="sondaggio" value="2" required>
                    <label class="selectDiv" for="s3"><?php echo $foodFinal[2] ?></label>
                    
                    <input type="radio" id="s4" name="sondaggio" value="3" required>
                    <label class="selectDiv" for="s4"><?php echo $foodFinal[3] ?></label>
                </div>
                <div>
                    <input type="hidden" name="numeroSondaggio" value="<?php echo $numeroSondaggio ?>">
                    <input type="submit" class="selectDiv">
                </div>
            </form>
        </div>
    </body>
</html>
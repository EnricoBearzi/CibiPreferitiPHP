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
                    if($cnt == $sondaggio) {
                        $data[$category][$food]++;
                    }
                    $cnt++;
                }
            }
            $tempCnt++;
        }

        $newJsonString = json_encode($data);
        file_put_contents('data.json', $newJsonString);
    }

    header("Location: ./graph/graphs.php");
?>
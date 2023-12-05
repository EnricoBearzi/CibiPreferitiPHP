<?php
$json_data = file_get_contents("./data.json");
$foodData = json_decode($json_data, true);
$graphData = array();

foreach($foodData as $category => $foodArray)
{
    $foodInfo = array();
    foreach($foodArray as $food => $voteAmt)
    {
        array_push($foodInfo, array("label"=> $food, "y"=> $voteAmt));
    }

    $catInfo = array("Name" => $category, "Options" => $foodInfo);
    array_push($graphData, $catInfo);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote Results - Admin</title>

    <script>
        var backColor = "#621708"
        var barColor = "#F6AA1C"
        var textColor = "#FFFFFF"

        window.onload = function () {
            
            // ANTIPASTI
            var graph = new CanvasJS.Chart("char"+"<?php echo $graphData[0]["Name"] ?>", {
                animationEnabled: true,
                exportEnabled: false,
                backgroundColor: backColor,
                title:{
                    fontColor: textColor,
                    fontFamily: "Arial",
                    fontWeight: "bold",
                    text: "<?php echo $graphData[0]["Name"] ?>"
                },
                axisX:{
                    labelFontColor: textColor
                },
                axisY:{
                    includeZero: true,
                    labelFontColor: textColor
                },
                data: [{
                    color: barColor,
                    type: "column",
                    indexLabel: "{y}",
                    indexLabelFontColor: textColor,
                    indexLabelPlacement: "inside",
                    indexLabelFontWeight: "bolder",
                    dataPoints: <?php echo json_encode($graphData[0]["Options"], JSON_NUMERIC_CHECK); ?>
                }]
            })
            
            graph.render();
            
            // PRIMI
            var graph = new CanvasJS.Chart("char"+"<?php echo $graphData[1]["Name"] ?>", {
                animationEnabled: true,
                exportEnabled: false,
                backgroundColor: backColor,
                title:{
                    fontColor: textColor,
                    fontFamily: "Arial",
                    fontWeight: "bold",
                    text: "<?php echo $graphData[1]["Name"] ?>"
                },
                axisX:{
                    labelFontColor: textColor
                },
                axisY:{
                    includeZero: true,
                    labelFontColor: textColor
                },
                data: [{
                    color: barColor,
                    type: "column",
                    indexLabel: "{y}",
                    indexLabelFontColor: textColor,
                    indexLabelPlacement: "inside",
                    indexLabelFontWeight: "bolder",
                    dataPoints: <?php echo json_encode($graphData[1]["Options"], JSON_NUMERIC_CHECK); ?>
                }]
            })
            
            graph.render();

            // CONTORNI
            var graph = new CanvasJS.Chart("char"+"<?php echo $graphData[2]["Name"] ?>", {
                animationEnabled: true,
                exportEnabled: false,
                backgroundColor: backColor,
                title:{
                    fontColor: textColor,
                    fontFamily: "Arial",
                    fontWeight: "bold",
                    text: "<?php echo $graphData[2]["Name"] ?>"
                },
                axisX:{
                    labelFontColor: textColor
                },
                axisY:{
                    includeZero: true,
                    labelFontColor: textColor
                },
                data: [{
                    color: barColor,
                    type: "column",
                    indexLabel: "{y}",
                    indexLabelFontColor: textColor,
                    indexLabelPlacement: "inside",
                    indexLabelFontWeight: "bolder",
                    dataPoints: <?php echo json_encode($graphData[2]["Options"], JSON_NUMERIC_CHECK); ?>
                }]
            })
            
            graph.render();
            
            // SECONDI
            var graph = new CanvasJS.Chart("char"+"<?php echo $graphData[3]["Name"] ?>", {
                animationEnabled: true,
                exportEnabled: false,
                backgroundColor: backColor,
                title:{
                    fontColor: textColor,
                    fontFamily: "Arial",
                    fontWeight: "bold",
                    text: "<?php echo $graphData[3]["Name"] ?>"
                },
                axisX:{
                    labelFontColor: textColor
                },
                axisY:{
                    includeZero: true,
                    labelFontColor: textColor
                },
                data: [{
                    color: barColor,
                    type: "column",
                    indexLabel: "{y}",
                    indexLabelFontColor: textColor,
                    indexLabelPlacement: "inside",
                    indexLabelFontWeight: "bolder",
                    dataPoints: <?php echo json_encode($graphData[3]["Options"], JSON_NUMERIC_CHECK); ?>
                }]
            })
            
            graph.render();

            // DESSERT
            var graph = new CanvasJS.Chart("char"+"<?php echo $graphData[4]["Name"] ?>", {
                animationEnabled: true,
                exportEnabled: false,
                backgroundColor: backColor,
                title:{
                    fontColor: textColor,
                    fontFamily: "Arial",
                    fontWeight: "bold",
                    text: "<?php echo $graphData[4]["Name"] ?>"
                },
                axisX:{
                    labelFontColor: textColor
                },
                axisY:{
                    includeZero: true,
                    labelFontColor: textColor
                },
                data: [{
                    color: barColor,
                    type: "column",
                    indexLabel: "{y}",
                    indexLabelFontColor: textColor,
                    indexLabelPlacement: "inside",
                    indexLabelFontWeight: "bolder",
                    dataPoints: <?php echo json_encode($graphData[4]["Options"], JSON_NUMERIC_CHECK); ?>
                }]
            })
            
            graph.render();
        }
    </script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>RISULTATI SONDAGGI - ADMIN</h1>
        <div class="graphDiv">
            <div class="graph" id="charAntipasti""></div>
            <br>
            <div class="graph" id="charPrimi"></div>
            <br>
            <div class="graph" id="charContorni"></div>
            <br>
            <div class="graph" id="charSecondi"></div>
            <br>
            <div class="graph" id="charDessert"></div>
        </div>

    <script src="./lib/canvasjs.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script> 
    <title>Document</title>
</head>
<body>
   <div id="chartContainer" style="height: 370px; width: 100%;"></div>

</body>

<?php
 
$dataPoints1 = array();
$dataPoints2 = array();
$updateInterval = 2000; //in millisecond
$initialNumberOfDataPoints = 5;
$x = time() * 1000 - $updateInterval * $initialNumberOfDataPoints;
$y1 = 1500;
$y2 = 1550;
// generates first set of dataPoints 
for($i = 0; $i < $initialNumberOfDataPoints; $i++){
	$y1 += round(rand(-2, 2));
	$y2 += round(rand(-2, 2));	
	array_push($dataPoints1, array("x" => $x, "y" => $y1));
	array_push($dataPoints2, array("x" => $x, "y" => $y2));
	$x += $updateInterval;
}
echo '<pre>';
 var_dump($dataPoints1);
 echo '</pre>';
 echo '<pre>';
 echo '<hr/>';
 var_dump($dataPoints2);
 echo '</pre>';

?>

<script>
window.onload = function() {
    
 
var updateInterval = <?php echo $updateInterval ?>;
var dataPoints1 = <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>;
var dataPoints2 = <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>;
var yValue1 = <?php echo $y1 ?>;
var yValue2 = <?php echo $y2 ?>;
var xValue = <?php echo $x ?>;
 
var chart = new CanvasJS.Chart("chartContainer", {
	zoomEnabled: true,
	title: {
		text: "Live Power Consumption of 2 Buildings"
	},
	axisX: {
		title: "chart updates every " + updateInterval / 1000 + " secs"
	},
	axisY:{
		suffix: " watts"
	}, 
	toolTip: {
		shared: true
	},
	legend: {
		cursor:"pointer",
		verticalAlign: "top",
		fontSize: 22,
		fontColor: "dimGrey",
		itemclick : toggleDataSeries
	},
	data: [{ 
			type: "line",
			name: "Building A",
			xValueType: "dateTime",
			yValueFormatString: "#,### watts",
			xValueFormatString: "hh:mm:ss TT",
			showInLegend: true,
			legendText: "{name} " + yValue1 + " watts",
			dataPoints: dataPoints1
		},
		{				
			type: "line",
			name: "Building B" ,
			xValueType: "dateTime",
			yValueFormatString: "#,### watts",
			showInLegend: true,
			legendText: "{name} " + yValue2 + " watts",
			dataPoints: dataPoints2
	}]
});
chart.render();

function toggleDataSeries(e) {
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart.render();
}
}


</script>
</html>

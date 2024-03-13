<?php
$title = 'Consommation journalière par catégorie client';
ob_start()
?>

<?php
 
$dataPoints1 = array();
$dataPoints2 = array();

// generates first set of dataPoints 
while($data = $takedata->fetch()){
    if($data['PROD'] == 'PROD'){
	array_push($dataPoints1, array("x" => $data['annee'], "y" => $data['kw']));
    }else if($data["PROD"] == "CONSO"){
	array_push($dataPoints2, array("x" => $data['annee'], "y" => $data['kw']));
    }
}

$y1 = 0;
$y2 = 39000;
?>

<script>
window.onload = function() {
    

var dataPoints1 = <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>;
var dataPoints2 = <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>;
var yValue1 = <?php echo $y1 ?>;
var yValue2 = <?php echo $y2 ?>;

 
var chart = new CanvasJS.Chart("chartContainer", {
	zoomEnabled: true,
	title: {
		text: "Live Power Consumption of 2 Buildings"
	},
	axisX: {
		title: "chart updates every secs"
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
			xValueType: "integer",
			yValueFormatString: "#,### watts",
			// xValueFormatString: "hh:mm:ss TT",
			showInLegend: true,
			legendText: "{name} " + yValue1 + " watts",
			dataPoints: dataPoints1
		},
		{				
			type: "line",
			name: "Building B" ,
			xValueType: "integer",
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
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<?php

$content = ob_get_clean();
require 'view/baseView.php';

?>
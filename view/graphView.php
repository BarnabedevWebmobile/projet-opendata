<?php
$title = 'Consommation journalière par catégorie client';
ob_start()
?>

<?php
 
$dataPoints1 = array();
$dataPoints2 = array();

// generates first set of dataPoints 
while($data = $takedata->fetch()){
    //$dateF = mktime(0, 0, 0, 1 , 1, $data['annee']);
    //$dateTime = date('Y-m-d H:i:s', $dateF);

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
		text: "Consommation et production journalières "
	},
	axisX: {
		title: "by year"
	},
	axisY:{
		suffix: " tera-watts"
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
			name: "production",
			xValueType: "interger",
			yValueFormatString: "#### tera-watts",
			xValueFormatString: "hh:mm:ss TT",
			showInLegend: true,
			legendText: "{name} " + yValue1 + " tera-watts",
			dataPoints: dataPoints1
		},
		{				
			type: "line",
			name: "consommation" ,
			xValueType: "interger",
			yValueFormatString: "#### tera-watts",
			showInLegend: true,
			legendText: "{name} " + yValue2 + " tera-watts",
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
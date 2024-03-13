<?php

// $bilan_electrique_transpose = array(
//     array('year(`Jour`)' => '2019','kw' => '4355303277.14200','PROD' => 'PROD'),
//     array('year(`Jour`)' => '2020','kw' => '5975157769.40100','PROD' => 'PROD'),
//     array('year(`Jour`)' => '2021','kw' => '5905772684.86700','PROD' => 'PROD'),
//     array('year(`Jour`)' => '2022','kw' => '6209951984.06700','PROD' => 'PROD'),
//     array('year(`Jour`)' => '2023','kw' => '7177449638.44100','PROD' => 'PROD'),
//     array('year(`Jour`)' => '2024','kw' => '1460327069.35100','PROD' => 'PROD'),
//     array('year(`Jour`)' => '2019','kw' => '26249958931.32600','PROD' => 'CONSO'),
//     array('year(`Jour`)' => '2020','kw' => '31779850292.47800','PROD' => 'CONSO'),
//     array('year(`Jour`)' => '2021','kw' => '33301210538.95900','PROD' => 'CONSO'),
//     array('year(`Jour`)' => '2022','kw' => '32177457756.74700','PROD' => 'CONSO'),
//     array('year(`Jour`)' => '2023','kw' => '30965145584.76300','PROD' => 'CONSO'),
//     array('year(`Jour`)' => '2024','kw' => '6392962290.71200','PROD' => 'CONSO')
//   );
// $dataPoints = array(
// 	array("x"=> 2019, "y"=> 26249958931.32600),
//     array("x"=> 2019, "y"=> 4355303277.14200),
// 	array("x"=> 2020, "y"=> 31779850292.47800, "indexLabel"=> "Lowest"),
// 	array("x"=> 2020, "y"=> 5975157769.40100),
// 	array("x"=> 2021, "y"=> 5905772684.86700),
// 	array("x"=> 2021, "y"=> 33301210538.95900),
// 	array("x"=> 2022, "y"=> 6209951984.06700, "indexLabel"=> "Highest"),
// 	array("x"=> 2022, "y"=> 32177457756.74700),


// );
?>

<script>
// window.onload = function () {
 
// var chart = new CanvasJS.Chart("chartContainer", {
// 	animationEnabled: true,
// 	exportEnabled: true,
// 	theme: "light1", // "light1", "light2", "dark1", "dark2"
// 	title:{
// 		text: "Simple Column Chart with Index Labels"
// 	},
// 	axisY:{
// 		includeZero: true
// 	},
// 	data: [{
// 		type: "column", //change type to bar, line, area, pie, etc
// 		//indexLabel: "{y}", //Shows y value on all Data Points
// 		indexLabelFontColor: "#5A5757",
// 		indexLabelPlacement: "outside",   
// 		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
// 	}]
// });
// chart.render();
 
// }
</script>
<!--<div id="chartContainer" style="height: 550px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
-->

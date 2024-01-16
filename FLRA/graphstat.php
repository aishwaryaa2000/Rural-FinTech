<!DOCTYPE HTML>
<html>
<head>




<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">


window.onload = function () {
	
		
	var chart1= new CanvasJS.Chart("chartContainer1", {
		title:{
			text: "SBI"              
		},
		data: [              
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "column",
			dataPoints: [
				{ label: "2015",y:22360 },
				{ label: "2016",y: 28500},
				{ label: "2017",y: 32700},
				{ label: "2018",y: 51678},
				{ label: "2019",y:59799 }
			]
		}
		]
	});
    chart1.render();
    
    </script>
</head>
<body>
<center>
<div id="chartContainer1" style= "width: 30%; height:10%"></div>
</center>
</body>
</html>

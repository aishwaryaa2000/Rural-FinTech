<?php 
session_start();
include 'connect.php';
 $query="SELECT `name`, `rate` FROM `bank` WHERE 1";
 $res=mysqli_query($conn,$query);
 $input=array();
 $i=0;
 while($row=mysqli_fetch_assoc($res))
 {
 $input[$i]=$row['rate'];
 $i++;
 }
 $p=$_POST['principle'];
?>

<!-- <!DOCTYPE html>
<html lang="en">
<body>

<h1>My Web Page</h1>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Work', 2],
  ['Eat', 8],
  ['TV', 4],
  ['Gym', 2],
  ['Sleep', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.Bargraph(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>
</html> -->


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
				{ label: "2020",y: <?php echo ($p*(1+($input[0]*1/100)));?> },
				{ label: "2021",y: <?php echo ($p*(1+($input[0]*2/100)));?> },
				{ label: "2022",y: <?php echo ($p*(1+($input[0]*3/100)));?> },
				{ label: "2023",y: <?php echo ($p*(1+($input[0]*4/100)));?> },
				{ label: "2024",y: <?php echo ($p*(1+($input[0]*5/100)));?> }
			]
		}
		]
	});
	chart1.render();

	var chart2= new CanvasJS.Chart("chartContainer2", {
		title:{
			text: "BANK OF BARODA"              
		},
		data: [              
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "column",
			dataPoints: [
				{ label: "2020",y: <?php echo ($p*(1+($input[1]*1/100)));?> },
				{ label: "2021",y: <?php echo ($p*(1+($input[1]*2/100)));?> },
				{ label: "2022",y: <?php echo ($p*(1+($input[1]*3/100)));?> },
				{ label: "2023",y: <?php echo ($p*(1+($input[1]*4/100)));?> },
				{ label: "2024",y: <?php echo ($p*(1+($input[1]*5/100)));?> }
			]
		}
		]
	});
	chart2.render();

	var chart3= new CanvasJS.Chart("chartContainer3", {
		title:{
			text: "BANK OF INDIA"              
		},
		data: [              
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "column",
			dataPoints: [
				{ label: "2020",y: <?php echo ($p*(1+($input[2]*1/100)));?> },
				{ label: "2021",y: <?php echo ($p*(1+($input[2]*2/100)));?> },
				{ label: "2022",y: <?php echo ($p*(1+($input[2]*3/100)));?> },
				{ label: "2023",y: <?php echo ($p*(1+($input[2]*4/100)));?> },
				{ label: "2024",y: <?php echo ($p*(1+($input[2]*5/100)));?> }
			]
		}
		]
	});
	chart3.render();

	var chart4= new CanvasJS.Chart("chartContainer4", {
		title:{
			text: "STATE BANK OF INDIA"              
		},
		data: [              
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "column",
			dataPoints: [
				{ label: "2020",y: <?php echo ($p*(1+($input[3]*1/100)));?> },
				{ label: "2021",y: <?php echo ($p*(1+($input[3]*2/100)));?> },
				{ label: "2022",y: <?php echo ($p*(1+($input[3]*3/100)));?> },
				{ label: "2023",y: <?php echo ($p*(1+($input[3]*4/100)));?> },
				{ label: "2024",y: <?php echo ($p*(1+($input[3]*5/100)));?> }
			]
		}
		]
	});
	chart4.render();

	

	
}
</script>
</head>
<body>
<center>
<div id="chartContainer1" style= "width: 30%; height:10%"></div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="chartContainer2" style="width: 30%; height:10%"></div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="chartContainer3" style="width: 30%; height:10%"></div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="chartContainer4" style="width: 30%; height:10%"></div>
</center>
</body>
</html>
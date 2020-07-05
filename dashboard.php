<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
 	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
      	var arrData = [['Date', 'No. of patients']]
      	<?php 
            $con = mysqli_connect('localhost','root','','hospital_management');
			$qry = "SELECT COUNT(patient_id) as id, appointment_date FROM patient GROUP BY appointment_date";
			$result = $con->query($qry);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
                    ?>
                       arrData.push([<?php echo strftime("%Y", strtotime($row['appointment_date'])).",".$row['id'] ?>])
                    <?php
				}
		    }		
      	?>
        var data = google.visualization.arrayToDataTable(arrData);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
</head>
<?php include './init/header.php'  ?>
    <div class="container text-center">
	  <div id="curve_chart" style="width: 900px; height: 500px"></div>
    </div>
<?php include './init/footer.php'  ?>
<?php
	// DB connection
	$conn = new mysqli("localhost", "root", "", "prediksi");
	
	// Assign variables
	$labels = $datas = $freq = "";
	
	// Select query to fetch data with page load
	$sql = "SELECT month, demand_result, freq from prediksi_permintaan where year = 2023";
	$result = $conn->query($sql);
	
	// Create data in comma seperated string
    if ($result) {
        # code...
        while($row = $result->fetch_assoc()){
            $labels .= "'" . $row['month'] . "',";
            $datas .= $row['demand_result'] . ",";
            $freq .= $row['freq'] . ",";
        }
    }
	
	// Remove the last comma from the string
	$lbl = trim($labels, ",");
	$val = trim($datas, ",");
    $fr = trim($freq, ",");
?>
<?php
    require 'templates/header.php';
    require 'templates/side_bar.php';
?>

<div class="container   " style="margin-left:40px;">
    <div class="row" style="margin-top: 50px;">
        <h1>Grafik Prediksi Permintaan</h1>    
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="input-group">
			<label style="margin-right: 10px;"> Pilih Tahun </label>
			<input type="text" id="datepicker" name="tahun"  />
		    <!-- <input type="submit" value="Ok" class="btn btn-sm btn-success" id="btn"> -->
		<div class="input-group-btn">
    </div>
    <div class="row" style="margin-top: 50px;">
         <div class="chart-container" style="position: relative; width:80vw">
            <canvas id="my_Chart"></canvas>
        </div>
    </div>
</div>
<script>
    var lbl = [<?=  $lbl ?>]; // Get Labels from php variable
	var val = [<?= $val ?>];
    var freq = [<?= $freq ?>];
    console.log(freq); // Get Data from php variable
			// Chart data with page load
     myData = {
		labels: lbl,
		datasets: [{
		    label: "Penjualan",
			fill: false,
			backgroundColor: ['#ff0000', '#ff4000', '#ff8000', '#ffbf00', '#ffbf00', '#ffff00', '#bfff00', '#80ff00'],
			borderColor: 'white',
			data: val,
		}]
	};
			// Draw default chart with page load
	var ctx = document.getElementById('my_Chart').getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',    // Define chart type
		data: myData    // Chart data
	});
     $("#datepicker").datepicker({
		format: " yyyy", // Notice the Extra space at the beginning
		viewMode: "years", 
		minViewMode: "years"
	    });
        let selected;
        console.log($("#datepicker").val());
        $("#datepicker").on("change",function(e){
            selected = $(this).val();
            console.log(selected);
            // $(".year").val(selected);
            $.ajax({
					url: 'http://localhost/montecarlosim/get_permintaan.php',
					dataType: 'json',
					data: {'id':selected},
					success: function(e){
						// Delete previous chart
						myChart.destroy();
						//Draw new chart with Ajax data
						myChart = new Chart(ctx, {
							type: 'bar',    // Define chart type
							data: e    		// Chart data
						});
					}
			});
        });

</script>

<!-- <h2>Created by Aris Laporan Prediksi Permintaan</h2> -->
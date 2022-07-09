<?php
	// DB connection
	$conn = new mysqli("localhost", "root", "", "prediksi");
	// $labels= $datas =[];
	// Check the GET request
	// if(isset($_GET['id']) && $_GET['id'] != '')
	// {
		// Select query on GET request
		$sql = "SELECT month, demand_result, freq from prediksi_permintaan where year =".$_GET['id'];
		$result = $conn->query($sql);
		// var_dump($result);
		// Store data in array
		if ($result) {
			# code...

			while($row = $result->fetch_assoc()){
				$labels[] = $row['month'];
				$datas[] = $row['demand_result'];
				$freq[] = $row['freq'];
			}
		}
		
		// Chart data for ajax request
		$data = array(
			'labels' => $labels,
			'datasets' => array(array(
				'label' => "Penjualan", 
				'fill' => false, 
				'backgroundColor' => array('#ff0000', '#ff4000', '#ff8000', '#ffbf00', '#ffbf00', '#ffff00', '#bfff00', '#80ff00'), 
				'borderColor' => 'black', 
				'data' => $datas,
			)),
		);
		
		// Convert and echo data in JSON format
		echo json_encode($data);
	// }
	
?>
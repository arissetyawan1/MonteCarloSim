<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['submit'])) {
		// $demand = $_POST['name'];
		// $email = $_POST['email'];
		// $mobile = $_POST['mobile'];
		$year = unserialize(base64_decode($_POST['years']));
		$demand = unserialize(base64_decode($_POST['demand']));
		$demand_result = unserialize(base64_decode($_POST['demand_result']));
		var_dump($demand_result);
		// include database connection file
		include_once("koneksi.php");
				
		// Insert user data into table
		// $result = mysqli_query($mysqli, "INSERT INTO prediksi(year,demand,demand_result) VALUES('$years','$demand','$demand_result')");
		
		// Show message when user added
		// echo "User added successfully. <a href='index.php'>View Users</a>";
        try {
              $sql = "INSERT INTO prediksi ('year', 'demand','demand_result') VALUES";
                        $s = '';
                        $bind = '';
                        for($i = 0 ; $i < count($year) ; $i++){
                            $sql .= " (?, ?, ?, ?, ?)"; 
                            $s .= 's';
                            $years = $year[$i];
                            $dem = $demand[$i];
                            $dem_res = $demand_result[$i];
                            // $varWebsite = $_POST['website'][$i];
                            $bind .= " , " . $years. " , " .$dem. " , " .$dem_res;
                        }

                        $sql = rtrim($sql, ','); // omit the last comma
                        $s = "'" .$s. "'";

                        $stmt = mysqli_prepare($link, $sql);
                        mysqli_stmt_bind_param($stmt, $s , $bind);
                        mysqli_stmt_execute($stmt);
        } catch (\Throwable $th) {
            throw $th;
        }
	}
	?>

<?php
 
	// Check If form submitted, insert form data into users table.
    // echo "test </br>";
	// if(isset($_POST['submit'])) {
		// $demand = $_POST['name'];
		// $email = $_POST['email'];
		// $mobile = $_POST['mobile'];
		// $year = unserialize(base64_decode($_POST['years']));
		// $demand = unserialize(base64_decode($_POST['demand']));
		// $demand_result = unserialize(base64_decode($_POST['demand_result']));
        // $freq = unserialize(base64_decode($_POST['freq']));
        $year = $_POST['years'];
        $demand = $_POST['demand'];
        $demand_res = $_POST['demandResult'];
        $freq = $_POST['freq'];
        $month = $_POST['month'];
        var_dump($demand, 'object demand </br>');
        var_dump($year, 'object year </br>');
		var_dump($demand_res, 'object demand_result </br>');
        var_dump($freq, 'object freq </br>');
        var_dump($month, 'object month </br>');
		// include database connection file
		// include_once("koneksi.php");
				
		// Insert user data into table
		// $result = mysqli_query($mysqli, "INSERT INTO prediksi(year,demand,demand_result) VALUES('$years','$demand','$demand_result')");
		
		// Show message when user added
		// echo "User added successfully. <a href='index.php'>View Users</a>";
        $link = mysqli_connect("localhost", "root", "", "prediksi");
        // try {
        //       $sql = "INSERT INTO prediksi ('year', 'demand','demand_result') VALUES";
        //                 $s = '';
        //                 $bind = '';
        //                 for($i = 0 ; $i < count($year) ; $i++){
                            // $sql .= " (?, ?, ?, ?, ?)"; 
                            // $s .= 's';
                            // $years = $year[$i];
                            // $dem = $demand[$i];
                            // $dem_res = $demand_result[$i];
                            // // $varWebsite = $_POST['website'][$i];
                        //     $bind .= " , " . $years. " , " .$dem. " , " .$dem_res;
                        // }

                        // $sql = rtrim($sql, ','); // omit the last comma
                        // $s = "'" .$s. "'";

        //                 $stmt = mysqli_prepare($link, $sql);
        //                 mysqli_stmt_bind_param($stmt, $s , $bind);
        //                 mysqli_stmt_execute($stmt);
        //                 header('location:prediksi_permintaan.php');
        // } catch (\Throwable $th) {
        //     throw $th;
        // }

        try {
            //  $sql = "INSERT INTO prediksi_permintaan(year, demand, demand_result, freq) VALUES ";
            //     for($i = 0 ; $i < count($year) ; $i++){
            //         $years = $year[$i];
            //         $demands = $demand[$i];
            //         $demand_res = $demand_result[$i];
            //         $frequencies = $freq[$i];
            //         // $varWebsite = $_POST['website'][$i];
            //         $sql .= "(" .$years. " , " .$demands. " , " .$demand_res. "," .$frequencies. "),";   
            //     }
            //     $sql = rtrim($sql, ',');
            //     var_dump($sql);
            //     $stmt = mysqli_prepare($link, $sql);
            //     mysqli_stmt_execute($stmt);
            foreach ($year as $key => $d) {
                $sql = "INSERT INTO prediksi_permintaan (year, demand, demand_result, month, freq) VALUES ($year[$key], $demand[$key], $demand_res[$key], '$month[$key]', $freq[$key])";
                
                //        if ($sql === TRUE) { //the $sql will not be true it will be the equal to to the string of the query
                    //            mysqli_query($query, $sql);
                    //        } else {
                        //            echo "Error: " . $sql . "<br>" . $query->error;
                        //        }
                        
                        if (!mysqli_query($link, $sql)) { //tries to perform the query, if it doesnt work prints the error
                            echo "Error: " . $sql . "<br>" . $link->error;
                        }
                    }
                    header('location:index.php');
        } catch (\Throwable $th) {
            throw $th;
        }
	// }
	?>

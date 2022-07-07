<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'prediksi';
$databaseUsername = 'root';
$databasePassword = '';
try {
    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
    var_dump($mysqli, 'success');
} catch (\Throwable $th) {
    throw $th;
} 
 
?>
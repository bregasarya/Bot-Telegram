<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'btc';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
 // Create connection
$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
    
$koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
 
// Check connection
if (mysqli_connect_error()){
  echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
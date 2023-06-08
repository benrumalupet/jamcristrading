<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$database = "jamcristrading";


//Prepared Hostinger

// $servername = "localhost";
// $username = "u991824422_ruben";
// $password = "Admin12345";
// $database = "u991824422_jamcristrading";
// $home = "https://jamcristrading.site";

function openConnection()
{
   global $host, $username, $password, $database;
   $conn = mysqli_connect($host, $username, $password, $database);
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   }
   return $conn;
}

function closeConnection($conn)
{
   mysqli_close($conn);
}
?>

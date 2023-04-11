<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "tempsensor02";
define ('url', 'http://localhost/Temp_Sensor_API_Copy/index.php');

$conn = mysqli_connect($host,$username,$password,$dbname);

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}


?>
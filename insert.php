<?php
include 'include/dbcon.php';

$value= !empty($_POST['value']) ? trim($_POST['value']) : 0;

if($value < 450)
{
    $query = "INSERT INTO temp_log (Temp_) VALUES ('$value')";
    $result = mysqli_query($conn, $query);
}
else{
        $query = "INSERT INTO alarm_log (Alarm_) VALUES ('$value');";
        $result = mysqli_query($conn, $query);
}

if($result==true)
{
    header('location:'. url);
}
?>
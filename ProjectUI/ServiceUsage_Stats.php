<?php
include("db.php");
error_reporting(0);

function calculatePercentage($value, $total) {
    return ($value / $total) * 100;
}

$query = "SELECT * FROM flatservice"; 
$data = mysqli_query($conn, $query);
$flat = mysqli_num_rows($data);

$query1 = "SELECT * FROM `garageservice`"; 
$data1 = mysqli_query($conn, $query1);
$garage = mysqli_num_rows($data1);

$query2 = "SELECT * FROM `moverservice`"; 
$data2 = mysqli_query($conn, $query2);
$movers = mysqli_num_rows($data2);

$query3 = "SELECT * FROM `housemaid`"; 
$data3 = mysqli_query($conn, $query3);
$maids = mysqli_num_rows($data3);

$total = $flat + $garage + $movers + $maids;

$percentage_flat = calculatePercentage($flat, $total);
$percentage_garage = calculatePercentage($garage, $total);
$percentage_movers = calculatePercentage($movers, $total);
$percentage_maids = calculatePercentage($maids, $total);

echo "Percentage of Usage flatservice: " . $percentage_flat . "%<br>";
echo "Percentage of Usage garageservice: " . $percentage_garage . "%<br>";
echo "Percentage of Usage moverservice: " . $percentage_movers . "%<br>";
echo "Percentage of Usage housemaid: " . $percentage_maids . "%<br>";
?>

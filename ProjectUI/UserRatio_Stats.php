<?php
include("db.php");
error_reporting(0);

function calculateRatio($numerator, $denominator) {
  
    if ($denominator != 0) {
        return $numerator / $denominator;
    } else {
        return "Undefined"; 
    }
}

$query = "SELECT * FROM `customer`"; 
$data = mysqli_query($conn, $query);
$customer = mysqli_num_rows($data);

$query1 = "SELECT * FROM `serviceprovider`"; 
$data1 = mysqli_query($conn, $query1);
$provider = mysqli_num_rows($data1);

$ratio = calculateRatio($provider, $customer);

echo "Provider : Customer<br>";
echo "<br>".$provider." : ".$customer."<br>";
echo "<br>The ratio between Provider and Customer is: {$ratio}";
?>

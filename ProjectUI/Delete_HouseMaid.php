<?php
    include("db.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM housemaid WHERE S_ID = '$id'"; 
    $delete = mysqli_query($conn,$sql); 
    header('location: EditHouseMaid.php');

?>
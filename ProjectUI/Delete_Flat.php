<?php
    include("db.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM flatservice WHERE S_ID = '$id'"; 
    $delete = mysqli_query($conn,$sql); 
    header('location: EditFlat.php');

?>
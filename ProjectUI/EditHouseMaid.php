<html>
    <body>
        <table border="1" align="center">
            <tr>
                <td colspan="3" align="left"><img src="1.png"></td>
                <td align="right"><a href="Logout.php">Logout |</a></td>
            </tr>
            <tr>
                <td colspan="3" align="left">
                    <form method="get" action="" enctype="">
                        <ul>
                        <li> <a href="Profile.php">Profile </a></li><br>
                            <li> <a href="Dashboard.php">Home </a></li><br>
                            <li> <a href="EditFlat.php">Edit Flat Services></a></li><br>
                            <li> <a href="EditGarageService.php">Edit Garage Services ></a></li><br>  
                            <li> <a href="EditMoverService.php">Edit Movers Services ></a></li><br>
                            <li> <a href="EditHouseMaid.php">Edit House Maid Services ></a></li><br>
                        </ul>
                    </form>
                </td>
                
                <?php
include("db.php");
error_reporting(0);
?>
<?php 

if(!isset($_COOKIE['flag'])){
    header('location: Login.php');
}

?>
<?php 
    $query = "SELECT * FROM `housemaid`"; 
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    $info = mysqli_fetch_assoc($data);
    if($total != 0)
    {
        ?>

<td>
    <table border = "3">
    <tr>
        <th>S_ID</th>
        <th>Location</th>
        <th>Salary</th>
        <th>Book</th>
    </tr>

        <?php
        while($info = mysqli_fetch_assoc($data))
        {
            echo "<tr>
            <td>".$info['S_ID']."</td>  
            <td>".$info['Location']."</td> 
            <td>".$info['Salary']."</td>
            <td>".$info['Book']."</td>
            
            <td><a href='Edit_HouseMaid_Form.php?id=$info[S_ID]'>Edit</a></td>
            <td><a href='Delete_HouseMaid.php?id=$info[S_ID]'>Delete</a></td>
            </tr>";
        }
        
?>
</table>
</td>
</tr>

<?php
}else {
    echo "No data found";
}
?>

<tr>
    <td colspan="9" align="center">
        <h6>Copyright @ 2017</h6></br>
    </td>
</tr>
</table>
</body>
</html>
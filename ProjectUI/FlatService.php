<?php
include("db.php");
?>

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
                            <li> <a href="FlatService.php">Flat Services></a></li><br>
                            <li> <a href="GarageService.php">Garage Services ></a></li><br>  
                            <li> <a href="MoverService.php">Movers Services ></a></li><br>
                            <li> <a href="HouseMaid.php">House Maid Services ></a></li><br>
                        </ul>
                    </form>
                </td>
                <td colspan="6">
                    <form method="POST" action="">
                        <fieldset>
                            <legend><b>Add New Flat Service</b></legend>
                            ServiceID: <input type="text" name="ServiceID" value="" /> <br>
                            Service Type: Flat<br>
                            Location: <input type="text" name="Location" value="" /> <br>
                            Flat Size: <input type="text" name="FlatSize" value="" /> <br>
                            Rent: <input type="text" name="Rent" value="" /> <br>
                            Duration: <input type="text" name="Duration" value="" /> <br><hr>               
                            <input type="submit" name="submit" value="Add" />
                        </fieldset>
                    </form>
                </td>
            </tr>
            <tr>
                <td colspan="9" align="center">
                    <h6>Copyright @ 2017</h6></br>
                </td>
            </tr>
        </table>
    </body>
</html>

<?php
if(isset($_POST['submit']))
{
    $ServiceID = $_POST['ServiceID'];
    $Location = $_POST['Location'];  
    $FlatSize = $_POST['FlatSize'];
    $Rent = $_POST['Rent'];

    $query = "INSERT INTO FlatService ( Location, FlatSize, Rent) VALUES ('$Location', '$FlatSize', '$Rent')";
    $data = mysqli_query($conn, $query);
}
?>

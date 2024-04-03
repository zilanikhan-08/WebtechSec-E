<?php
include("db.php");
?>
<?php 

if(!isset($_COOKIE['flag'])){
    header('location: Login.php');
}

?>
<html>
    <body>
    <table border="1" align="center">
                <tr>
                    <td colspan="3" align = "left"><img src="1.png"></td>
                    <td align = "right"><a href="Logout.php">Logout |</a></td>
                    
                </tr>
                <tr>
                    <td colspan="3" align = "left">
                    <form method="get" action= "" enctype="">
                            <ul >
                            <li> <a href="Profile.php">Profile </a></li><br>
                            <li> <a href="Dashboard.php">Home </a></li><br>
                            <li> <a href="FlatService.php">Flat Services></a></li><br>
                            <li> <a href="GarageService.php">Garage Services ></a></li><br>  
                            <li> <a href="MoverService.php">Movers Services ></a></li><br>
                            <li> <a href="HouseMaid.php">House Maid Services ></a></li><br>
                            </ul>
                    
                         </form>
                    </td>
                    <td colspan="6">
                        <form method="POST" action=""enctype = "">
                            <fieldset>
                                <legend><b>Add New Garage Service</b></legend>
                                
                                       ServiceID                <input type="text" name="ServiceID" value="" /> <br>
                                       Service Type: Garage<br>               
                                       Location:                <input type="text" name="Location" value="" /> <br>
                                       Rent:                    <input type="text" name="Rent" value="" /> <br>
                                       Duration:                <input type="text" name="Duration" value="" /> <br><hr>
                                                     
                                                                <br><input type="submit" name="submit" value="Add" />
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
    $Rent = $_POST['Rent'];

    $query = "INSERT INTO garageservice ( Location, Rent) VALUES ( '$Location', '$Rent')";
    $data = mysqli_query($conn, $query);
   
    header('location: EditGarageService.php');
}
?>
<?php
include("db.php");
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
                             <li> <a href="FlatService.php">Flat Services></a></li><br>
                             <li> <a href="GarageService.php">Garage Services ></a></li><br>  
                             <li> <a href="MoverService.php">Movers Services ></a></li><br>
                             <li> <a href="HouseMaid.php">House Maid Services ></a></li><br>
                            </ul>
                    
                         </form>
                    </td>
                    <td colspan="6">
                        <form method="post" action=""enctype = "">
                            <fieldset>
                                <legend><b>Add New Movers Service</b></legend>
                                
                                       ServiceID                <input type="text" name="ServiceID" value="" /> <br>
                                       Service Type: Mover<br>               
                                       Location:                <input type="text" name="Location" value="" /> <br>
                                       Salaray:                    <input type="text" name="Salary" value="" /> <br>
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
    $Location = $_POST['Location'];  
    $Salary = $_POST['Salary'];

    $query = "INSERT INTO moverservice ( Location, Salary) VALUES ( '$Location', '$Salary')";
    $data = mysqli_query($conn, $query);
}
?>
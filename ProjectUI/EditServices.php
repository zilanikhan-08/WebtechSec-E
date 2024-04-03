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
                            <li> <a href="AddServices.php">Add Service </a></li><br>

                            </ul>
                    
                         </form>
                    </td>
                    <td colspan="6">
                        <form method="post" action=""enctype = "">
                            <fieldset>
                                <legend><b>Add New Service</b></legend>
                                <li> <a href="EditFlat.php">Edit Flat></a></li><br>
                                <li> <a href="EditGarageService.php">Edit Garage  ></a></li><br>  
                                <li> <a href="EditMoverService.php">Edit Movers  ></a></li><br>
                                <li> <a href="EditHouseMaid.php">Edit House Maid  ></a></li><br>
                                      
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

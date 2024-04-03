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
                             <li> <a href="AddServices.php">Add Services></a></li><br>
                             <li> <a href="EditServices.php">Edit Services></a></li><br>
                            </ul>
                    
                         </form>
                    </td>
                    <td colspan="6">
                    <form method="" action="" enctype="">
        <table border="2" >
            <!-- TOB BAR -->
            <tr>
                <td ><img src="../Image resouces/ManueNavigation.png" width="50px"> </td>

                <td width="1350px" >
                    <table border ="1" bordercolor="red" width="1350px">
                        <tr>
                            <td  width="1075px" align="center"><img src="../Image resouces/MainLogo.png"></td>
                            <td align="right">
                                <table border = "1" width="250px" bordercolor="green" align="right">
                                <tr align="right">
                                    <td><h4>Sabbie ahmed al seum</h4></td>
                                </tr>
                                <tr align="right">
                                    <td><h5>Consumer</h5></td>
                                </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td >
                <td>
                    <img src="../Image resouces/ManueNavigation.png" align = center width="50px" height="40px">               
                </td>
            </tr>
            <!-- TOB BAR -->
            <tr>
                <td  colspan="3" height="100px" align="center">
                    <fieldset>
                        <legend>services</legend>
                    <table border ="2" >
                        <tr >
                            <td width="400px" align="center">
                                <img src="../Image resouces/ManueNavigation.png" height="250px" width="250px"><br>
                                <input type="button" name="" value="Service name">
                                <hr>
                            </td>
                            <td width="400px" align="center">
                                <img src="../Image resouces/ManueNavigation.png" height="250px" width="250px"><br>
                                <input type="button" name="" value="Service name">
                                <hr>
                            </td>
                            <td width="400px" align="center">
                                <img src="../Image resouces/ManueNavigation.png"height="250px" width="250px"><br>
                                <input type="button" name="" value="Service name">
                                <hr>
                            </td>
                        </tr>
                        <tr >
                            <td width="400px" align="center"><hr>
                                <img src="../Image resouces/ManueNavigation.png" height="250px" width="250px"><br>
                                <input type="button" name="" value="Service name">
                                <hr>
                            </td>
                            <td width="400px" align="center"><hr>
                                <img src="../Image resouces/ManueNavigation.png" height="250px" width="250px"><br>
                                <input type="button" name="" value="Service name">
                                <hr>
                            </td>
                            <td width="400px" align="center"><hr>
                                <img src="../Image resouces/ManueNavigation.png"height="250px" width="250px"><br>
                                <input type="button" name="" value="Service name">
                                <hr>
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <td>
            </tr>
        </table>
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
if(isset($_COOKIE['userID'])) {
    echo "Value of 'user' cookie: " . $_COOKIE['userID'];
}
?>
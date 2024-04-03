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

                            </ul>
                    
                         </form>
                    </td>
                    <td colspan="6">
                    <form method="get" action= "" enctype="">
                            <ul >
                            <li> <a href="Admin_Stats.php">Current Stats></a></li><br>

                            </ul>
                    
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
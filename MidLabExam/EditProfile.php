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
                       Account<hr>
                       <ul >
                        <li> <a href="Dashboard.php">Dashboard</a></li><br>
                        <li> <a href="ViewProfile.php">View Profile</a></li><br>
                        <li> <a href="EditProfile.php">Edit Profile</a></li><br>
                        <li> <a href="ChangeProfilePicture.php">Change Profile Picture</a></li><br>
                        <li><a href="ChangePassword.php">Change Password</a></li><br>
                        <li><a href="Logout.php">Logout</a></li><br>
                        
                       </ul>

                    </form>
                    </td>
                    <td colspan="6">
                        <form method="post" action="1.php"enctype = "">
                            <fieldset>
                                <legend><b>EDIT PROFILE</b></legend>
                                     NAME:                      <input type="text" name="name" value="" /> <br><hr>
                                     Email:                     <input type="text" name="Email" value="" /><br><hr>
                                     Gender:                    <input type="radio" name="gender" value="" /> Male
                                                                <input type="radio" name="gender" value="" /> Female
                                                                <input type="radio" name="gender" value="" /> Other <br><hr>
                                     Date of Birth:             <input type="text" name="DateofBirth" value="" /><br><br><hr>  
                                                                <br><input type="submit" name="" value="Submit" />
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
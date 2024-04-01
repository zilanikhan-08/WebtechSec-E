<?php
include("db.php");
?>

<html>
    <body>
        <table border="1" align="center">
            <tr>
                <td colspan="3" align="left">
                    <form method="get" action="" enctype="">
                        <ul>
                            <li> <a href="Admin.php">Home </a></li><br>
                            <li> <a href="EditEmployee.php">Edit Employee></a></li><br>
                        </ul>
                    </form>
                </td>
                <td colspan="6">
                    <form method="POST" action="">
                        <fieldset>
                            <legend><b>Add New Employee</b></legend>
                            Employee Name: <input type="text" name="Name" value="" /> <br>
                            Contact No.: <input type="text" name="Contact" value="" /> <br>
                            Username: <input type="text" name="Username" value="" /> <br>
                            Password: <input type="text" name="Password" value="" /> <br>           
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
    $Name = $_POST['Name'];
    $Contact = $_POST['Contact'];  
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    $query = "INSERT INTO `emp`(`Name`, `Contact`, `Username`, `Password`) VALUES ('$Name','$Contact','$Username','$Password')";
    $data = mysqli_query($conn, $query);

    header('location: EditEmployee.php');
}
?>

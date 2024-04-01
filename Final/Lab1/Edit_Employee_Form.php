<?php
include("db.php");
$id = $_GET['id'];

$query = "SELECT * FROM EMP WHERE Username = '$id'"; 
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    $info = mysqli_fetch_assoc($data);
?>
<html>
    <body>
        <table border="1" align="center">
            <tr>
                <td colspan="3" align="left">
                    <form method="get" action="" enctype="">
                        <ul>
                            <li> <a href="Admin.php">Home </a></li><br>
                            <li> <a href="AddEmployee.php">Add Employee></a></li><br>
                        </ul>
                    </form>
                </td>
                <td colspan="6">
                    <form method="POST" action="">
                        <fieldset>
                            <legend><b>Edit Employee</b></legend>
                            Employee Name: <input type="text" name="Name" value="<?php echo $info['Name']?>" /> <br>
                            Contact No.: <input type="text" name="Contact" value="<?php echo $info['Contact']?>" /> <br>
                            Username: <input type="text" name="Username" value="<?php echo $info['Username']?>" /> <br>
                            Password: <input type="text" name="Password" value="<?php echo $info['Password']?>" /> <br>              
                            <input type="submit" name="submit" value="Edit" />
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

    $query = "UPDATE `emp` SET `Name`='$Name',`Contact`='$Contact',`Password`='$Password' WHERE `Username`='$Username'";
    $data = mysqli_query($conn, $query);
    header('location: EditEmployee.php');
}
?>

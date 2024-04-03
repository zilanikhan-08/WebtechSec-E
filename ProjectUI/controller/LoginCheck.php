<?php
include('../db.php');
?>
<?php
    if(isset($_POST['submit']))
    {
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];

        $sql = "SELECT * FROM customer WHERE Name = '{$username}' and Password = '{$password}'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1)
        {
             header("Location: /Dashboard.php");
        }
        else
        {
              echo "wrong Name and Password";
        }
    }
    


?>
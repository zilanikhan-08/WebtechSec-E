<?php
include("db.php");
$email = $_GET['email'];
?>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       
                         <form method="POST" action="" enctype="">
                                <fieldset align="center" width="70%" height="300">
                                    <legend align="center"><h1>CHANGE_PASSWORD</h1></legend>
                                    New Password: <input type="text" name="new" value="" ><br>
                                    Confirm Password: <input type="password" name="confirm" value="" ><br>
    
                                    <input type="submit" name="submit" value="OK" >
                                </fieldset>
                         </form>
           
</body>
</html>
<?php

if(isset($_POST['submit'])) {
    $new = $_POST["new"];
    $confirm = $_POST["confirm"];
    
    if(!empty($new) && !empty($confirm) && $new === $confirm) {
        // Sanitize inputs
        $new = mysqli_real_escape_string($conn, $new);
        $email = mysqli_real_escape_string($conn, $email);
        
        // Update password for service provider
        $sql = "UPDATE `serviceprovider` SET `Password`='$confirm' WHERE Email = '$email'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn) > 0) {
            header("Location: Login.php");
            exit();
        }
        
        // Update password for admin
        $sql = "UPDATE `admin` SET `Password`='$confirm' WHERE Email = '$email'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn) > 0) {
            header("Location: Login.php");
            exit();
        }
        
    } else {
        echo "Passwords do not match.";
    }
}
?>

<?php
include('db.php');
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
                                    <legend align="center"><h1>FORGOT_PASSWORD</h1></legend>
                                    Email: <input type="text" name="email" value="" ><br>
    
                                    <a href="ChangePassword.php"><input type="submit" name="submit" value="Next" ></a>
                                </fieldset>
                         </form>
           
</body>
</html>
<?php
if(isset($_POST['submit']))
{    
    $email = $_POST["email"];
    $sql = "SELECT * FROM serviceprovider WHERE Email  = '{$email}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1)
    {
        header("Location: ChangePassword.php?email=$email");
    }
    else
    {
    $email = $_POST["email"];
    $sql1 = "SELECT * FROM `admin` WHERE Email  = '{$email}'";
    $result1 = mysqli_query($conn, $sql1);
    $count1 = mysqli_num_rows($result1);

    if($count1 == 1)
    {
        header("Location: ChangePassword.php?email=$email");
    }
    }

}
?>
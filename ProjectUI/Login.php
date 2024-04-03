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
        <table width="100%" height="550"align="center">
            <tr>
                <td 
                    <main>
                        <table align="center">                           
                               <form method="POST" action="" enctype="">
                                <fieldset align="center" width="70%" height="300">
                                    <legend align="center"><h1>Login</h1></legend>
                                    User Name: <input type="text" name="username" value="" ><br>
                                    Password: <input type="password" name="password" value="" ><br>
                                    <input type="submit" name="submit" value="Sign In" >
                                    <a href="FORGOT_PASSWORD.php">Forget Password?</a>
                                </fieldset>
                            </form>
                        </table>
                    </main>
                </td>
            </tr>
        </table>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM serviceprovider WHERE Name = '{$username}' and Password = '{$password}'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1)
        {
            setcookie('flag', 'true', time()+3600, '/');
            header("Location: Dashboard.php");
        }
        else
        {
            
        $sql = "SELECT * FROM `admin` WHERE Name = '{$username}' and Password = '{$password}'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1)
        {
            setcookie('flag', 'true', time()+3600, '/');
            header("Location: Dashboard_Admin.php");
        }
        else
        {           
            echo "wrong Name and Password";
        }
        }
        
    }

?>
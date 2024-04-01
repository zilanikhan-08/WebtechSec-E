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
                
<?php
include("db.php");
error_reporting(0);
?>

<?php 
    $query = "SELECT * FROM EMP"; 
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    $info = mysqli_fetch_assoc($data);
    if($total != 0)
    {
        ?>

<td>
    <table border = "3">
    <tr>
        <th>NAME</th>
        <th>CONTACTS</th>
        <th>UserName</th>
        <th>Password</th>
    </tr>

        <?php
        while($info = mysqli_fetch_assoc($data))
        {
            echo "<tr>
            <td>".$info['Name']."</td>  
            <td>".$info['Contact']."</td> 
            <td>".$info['Username']."</td>
            <td>".$info['Password']."</td>
            
            <td><a href='Edit_Employee_Form.php?id=$info[S_ID]'>Edit</a></td>
            <td><a href='Delete_Employee.php?id=$info[S_ID]'>Delete</a></td>
            </tr>";
        }
        
?>
</table>
</td>
</tr>

<?php
}else {
    echo "No data found";
}
?>

<tr>
    <td colspan="9" align="center">
        <h6>Copyright @ 2017</h6></br>
    </td>
</tr>
</table>
</body>
</html>

<?php
$email = $_REQUEST['email']; 
if(empty($email))
{
    echo "please provide your email";
}
else
{
    $flag1=0;$flag2=0;
    for($i=0;$i<strlen($email);$i++)
    {
       if($email[$i]=='@') 
       {
        $flag1 = 1;
       }
       else if($email[$i]=='.')
       {
        $flag2 = 1;
       }
    }
    if($flag1==1 && $flag2==1)
    {
        echo $email;
    }
    else
   {
    echo "Invalid";
   }
} 
?>
<?php
$name = $_REQUEST["name"];

if($name == "")
{
    echo "please provide your name";
}
else if(strlen($name)<2)
{
    echo "Wrong Input 1";
} 
// else if($name[0]=='0'||$name[0]=='1'||$name[0]=='2'||$name[0]=='3'||$name[0]=='4'||$name[0]=='5'||$name[0]=='6'||$name[0]=='7'||$name[0]=='8'||$name[0]=='9' )
else if ($name[0]>='0'&& $name[0]<='9')
{
    echo "Wrong Input 2";
} 
else
{
    echo $name;
}


?>
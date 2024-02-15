<?php 
$Num1=5;
$Num2=6;
$Num3=2;

echo "Num1= ".$Num1."<br>";

echo "Num2= ".$Num2."<br>";

echo "Num3= ".$Num3."<br>";
if($Num1>$Num2)
{    
    if($Num1>$Num3)
    {
        echo "Num1 is greatest" ;
    }
    else
    {
        echo "Num3 is greatest";
    }

}
else
{
    if($Num2>$Num3)
    {
        echo "Num2 is greatest ";
    }
    else
    {
        echo "Num3 is greatest";
    }
}    

?>
<?php
$arr = [1,2,3,4,5,6,7,8,9];
$Num = 5;
echo "Number= ".$Num;
function Search($n,$Arr)
{
    $found= false;
    foreach ($Arr as $e) 
    {
        if ($e === $n) {
            echo "<br>Number $n exists.";
            $found = true;
            break; 
        }
    }
    if(!$found)
    {
        echo "Number doesnot Exists.";
    }

}
Search($Num,$arr); 

?>
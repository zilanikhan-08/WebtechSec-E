<?php 
$Length=2;
$Width=2;

function Area($L,$W)
{
    return $L*$W;
}

function Perimeter($L,$W)
{
    return 2*($L+$W);
}

echo "Length= ".$Length."<br>Width= ".$Width." <br>The area of a Rectangle = ". Area($Length,$Width)."<br> The Perimeter of a Rectangle = ". Perimeter($Length,$Width);
 
?>
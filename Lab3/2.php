<?php 
$Amount=100;

function VAT($a)
{
    return 15/100*($a);
}

echo "Amount = ".$Amount."<br> VAT = ". VAT($Amount);
?>
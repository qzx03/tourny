<?php


function calculatePRICE($banana, $apple, $orange, $strawberry){
    $bananaP = 10;
    $appleP = 16;
    $orangeP = 8;
    $strawberryP = 24.5;

    return $banana * $bananaP + $apple * $appleP + $orange * $orangeP + $strawberry * $strawberryP;
}

function calculateWEIGHT($banana, $apple, $orange, $strawberry){
    return $banana + $apple + $orange + $strawberry;
}

function calculateDISCOUNT($Tprice){
    
    return $Tprice - $Tprice * (10/100);
    
}




?>
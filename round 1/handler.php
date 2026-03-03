<?php
require "function.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST["submit"])){
        $banana = $_POST['banana'];
        $apple = $_POST['apple'];
        $orange = $_POST['orange'];
        $strawberry = $_POST['strawberry'];

        $bananaP = 10;
        $appleP = 16;
        $orangeP = 8;
        $strawberryP = 24.5;

        $Tprice = calculatePRICE($banana, $apple, $orange, $strawberry);
        $Tweight = calculateWEIGHT($banana, $apple, $orange, $strawberry);

        echo "the total weight is: {$Tweight} <br>
         the total price is: {$Tprice} <br>";
         if($Tprice >= 50){
            $Dprice = calculateDISCOUNT($Tprice);
            echo"the total price with the discount is {$Dprice}";
            }


    }
}






?>
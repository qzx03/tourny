<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['submit'])){
    $DC = $_POST['DC'];
    $AC = $_POST['AC'];
    $ST = $_POST['ST'];
    $weight = isset($_POST['weight']) ? $_POST['weight'] : "";
    $total = 20;
    $price = 20;

    if($weight === "" || $weight <= 0){
        $_SESSION['noWEIGHT'] = "the weight is invalid";
        header("Location: index.php");
        exit;
    }else{
        if($DC !== $AC){
            $total = $total + ($price * (50/100));
        }

        if($ST = "Express"){
            $total = $total + ($price * (20/100));
        }

        if($weight >= 5){
             $total = $total + (($weight - 5) * 5);
        }

        

        

        echo    "Departure city: $DC <br>
                 Arrival city: $AC <br>
                 Shipping type: $ST <br>
                 Weight of the shippment: $weight <br>
                 total price: {$total}DH<br>";
    }






    }
}



?>
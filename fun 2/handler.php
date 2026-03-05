<?php
session_start();
$amount = $_POST['amount'];
$price = $_POST['price'];
$promo = isset($_POST['promo']) ? $_POST['promo'] : "";
$delivery = $_POST['delivery'];
$promocode =    [
                "DEV10",
                "SUPER20"
                ];
$discounted = 0;
$DC;



 if(!is_numeric($price)){
    $_SESSION['priceERR'] = "price must be a number";
    header("location: index.php");
    if(!is_numeric($amount)){
    $_SESSION['amountERR'] = "amount must be a number";
    header("location: index.php");
    exit;
}
    exit;
}else{
    $price = (float)$price;
}
if(!is_numeric($amount)){
    $_SESSION['amountERR'] = "amount must be a number";
    header("location: index.php");
    exit;
}else{
    $amount = (int)$amount;
}
if(in_array($promo, $promocode)){
    if($promo === "DEV10"){
        $discounted = $discounted + 10;
    }else{
        $discounted = $discounted + 20;
    }
}
$total = $price * $amount;
if($total >= 1000){
    $discounted = $discounted + 15;
}
if($amount >= 5){
    $discounted = $discounted + 10;
}
$Mdiscounted = $total * ($discounted/100);

$discountedT = $total - $Mdiscounted;

if($delivery === "standard"){
    $DC = 0;
}elseif($delivery === "express"){
    $DC = 50;
}
if($discountedT >= 1500){
    $DC = 0;
}

$Ftotal = $discountedT + $DC;

echo"   •Initial total: $total DH <br>
        •Promo Code used: $promo <br> 
        •Applied discount: $discounted % <br>
        •Money discounted: $Mdiscounted DH <br>
        •Delivery mode: $delivery <br>
        •delivery cost: $DC DH <br>
        •Final total: $Ftotal DH <br>";
?>
<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $number = $_POST['number'];
    if(isset($_POST['submit'])){
        if(!($number >= 1) || !($number <= 9)){
            echo"number must be between 1 and 9";
        }else{
            for ($i = 1; $i <= 10; $i++) {
    echo $number . " x " . $i . " = " . ($number * $i) . "<br>";
}


        }
    }
}


?>
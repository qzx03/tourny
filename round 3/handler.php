<?php
session_start();
require "functions.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['submit'])){
        $ATW = isset($_POST['WD']) ? $_POST['WD'] : "";
        $ATW2 = $ATW;
        $Y50 = isset($_POST['Y50']) ? "true" : "false";
        $B200 = 6;
        $B100 = 10;
        $B50 = 15;
        $TW200 = 0;
        $TW100 = 0;
        $TW50 = 0;
        $CWD = "";

        if($ATW == ""){
           $_SESSION['error'] = "the amount to withdraw field must be filled";
            header("Location: index.php");
            exit;
        }else{
            if(validateATW($ATW) == "valid"){
                if($Y50 == "true"){
            if($ATW >= 50){
                if($ATW % 200 != 0){
                    $TW100 = $TW100 + 1;
                    $ATW2 = $ATW2 - 100;
                    if($B200 <= $ATW2 / 200){
                    $TW200 = $ATW2 / 200;
                    }else{
                        $TW200 = 6;
                        $ATW2 = $ATW2 - 6 * 200;
                        if($B100 <= $ATW / 100){
                        $TW100 = $ATW2 / 100;
                        }else{
                            $TW100 = 10;
                            $ATW2 = $ATW2 - 10 * 100;
                            if($B50 <= $ATW / 50){
                            $TW50 = $ATW2 / 50;
                            }else{
                                $ATW2 = $ATW2 - 15 * 50;
                                if($ATW2 != 0){
                                    $CWD = "we are out of stock, we couldn't withdraw " . $ATW2 . " of your total amount.";
                                }
                            }
                        }
                    }
                }else{
                    $TW200 = $ATW2 / 200;
                }
            }
            }else{
                if($ATW >= 100){
                if($ATW % 200 != 0){
                    $TW100 = $TW100 + 1;
                    $ATW2 = $ATW2 - 100;
                    if($B200 <= $ATW2 / 200){
                    $TW200 = $ATW2 / 200;
                    }else{
                        $TW200 = 6;
                        $ATW2 = $ATW2 - 6 * 200;
                        if($B100 <= $ATW / 100){
                        $TW100 = $ATW2 / 100;
                        }else{
                            $TW100 = 10;
                            $ATW2 = $ATW2 - 10 * 100;
                                if($ATW2 != 0){
                                    $CWD = "we are out of stock, we couldn't withdraw " . $ATW2 . " of your total amount.";
                                }
                            }
                        }
                    }
                }else{
                    $TW200 = $ATW2 / 200;
                }
            }
            




            }else{
                $_SESSION['error'] = "the amount to withdraw is invalid";
                header("Location: index.php");
                exit;
            }
        }

        echo    "200DH bills: $TW200 <br>
                 100DH bills: $TW100 <br>
                 50DH bills: $TW50 <br>
                 $CWD";
    }
}



?>
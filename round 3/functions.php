<?php


function validateATW($ATW){
        if($ATW % 50 != 0){
            return "invalid";
        }else{
            return "valid";
        }
}


?>
<?php
require "functions.php";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST['submit'])){
        $N1 = isset($_POST['N1']) ? $_POST['N1'] : NULL;
        $N2 = isset($_POST['N2']) ? $_POST['N2'] : NULL;
        $op = $_POST['op'];

        
        if($op === 'sqr'){
            if(is_numeric($N1)){
                echo calculate($N1, $op, $N2);
            }else{
                header("location: index.php");
                exit;
            }
        }else{
            if(is_numeric($N1) && is_numeric($N2)){
                echo calculate($N1, $op, $N2);
            }else{
                header("location: index.php");
                exit;
            }
        }




    }
}

    







?>
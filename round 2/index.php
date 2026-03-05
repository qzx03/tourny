<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="POST">
        <fieldset><legend>enter password</legend>
        <label for="password">password:</label>
        <input type="text" id="password" name="password">
        <input type="submit" value="verify" name="submit">
        </fieldset>
    </form>

</body>
</html> 

<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['submit'])){

        $password = $_POST['password'];
        $passwordARR = str_split($password);
        $points = 10;
        $passSTRENGTH = NULL;
        $blackLIST =    [   "123456",
                            "wasd123",
                            "azerty",
                            "qwerty",
                            "password",
                            "pass123",
                            "admin",
                            "abcdefg"  
                        ];
        $specialCHAR =  [
                            "!",
                            "@",
                            "#",
                            "$",
                            "%",
                            "^",
                            "&",
                            "*",
                            "_",
                            "-",
                            ":",
                            ";",
                            ",",
                            "."
                        ];


        if(strlen($password) >= 8){
            $points = $points + 20;
        }

        if(strlen($password) >= 12){
            $points = $points + 10;
        }

        foreach($passwordARR as $letter){
            if(ctype_lower($letter)){
                $points = $points + 15;
                break;
            }
            
        }
       
        foreach($passwordARR as $letter){
            if(ctype_upper($letter)){
                $points = $points + 15;
                break;
            }
           
        }

        foreach($passwordARR as $letter){
            if(in_array($letter, $specialCHAR)){
                $points = $points + 15;
                break;
            }
            
        }

        
        foreach($passwordARR as $letter){
            if($letter === " "){
                $points = $points - 10;
                break;
            }
            
        }

        if($points >= 100){
            $points = 100;
        }

        if($points <= 39){
            $passSTRENGTH = "🔴 weak";
        }elseif($points >= 40 && $points <= 69){
            $passSTRENGTH = "🟠 normal";
        }elseif($points >= 70 && $points <= 89){
            $passSTRENGTH = "🔵 strong";
        }else{
            $passSTRENGTH = "🟢 very strong";
        }

        if($password === "" || $password === " "){
            $points = 0;
        }

        foreach($blackLIST as $blackLISTED){
        if($password === $blackLISTED){
            $points = 0;
        }
    }
    echo "you got: " . $points . " points. <br>";
    echo "your password is " . $passSTRENGTH . ".";
    }
}
?>
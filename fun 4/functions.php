<?Php


    function calculate($N1, $op, $N2){
        if($op === "pls"){
            return $N1 + $N2;
        }
        if($op === "min"){
            return $N1 - $N2;
        }
        if($op === "mul"){
            return $N1 * $N2;
        }
        if($op === "div"){
            if($N2 != 0){
            return $N1 / $N2;
            }else{
                return "you can't divide by 0";
            }
        }
        if($op === "pow"){
            return pow($N1, $N2);
        }
        if($op === "sqr"){
            if($N1 >= 0){
                return sqrt($N1);
            }else{
                return "you can't square root a negative number";
            }
        }
    }


?>
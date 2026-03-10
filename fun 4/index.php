<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    

    <form action="handler.php" method="POST">
        <fieldset>
            <label for="N1">Number 1:</label>
            <input type="number" name="N1" id="N1"><br><br>
            
            <label for="op">operator:</label>
            <select name="op" id="op">
                <option value="pls">+</option>
                <option value="min">-</option>
                <option value="mul">*</option>
                <option value="div">/</option>
                <option value="pow">^</option>
                <option value="sqr">sqrt</option>
            </select><br><br>
            <div id="number2">

            </div>
            <input type="submit" value="calculate" name="submit">
        </fieldset>
    </form>

<script>
    const op = document.getElementById("op");
    const div = document.getElementById("number2");


    if(op.value !== "sqr"){
        div.innerHTML = '<label for="N2">Number 2: </label>' + 
                        '<input type="number" name="N2" id="N2"><br>';
    }else{
        div.innerHTML = '';
    }
    
    
    op.addEventListener("change", function(){
    if(op.value !== "sqr"){
        div.innerHTML = '<label for="N2">Number 2: </label>' + 
                        '<input type="number" name="N2" id="N2"><br>';
    }else{
        div.innerHTML = '';
    }
})

</script>


</body>
</html>
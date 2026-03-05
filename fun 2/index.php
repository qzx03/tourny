<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="handler.php" method="POST">
    <fieldset><legend>enter:</legend>
    <label for="amount">amount:</label>
    <input type="text" name="amount" id="amount"><br><br>
    <label for="price">price(per kg):</label>
    <input type="text" name="price" id="price"><br><br>
    <label for="promo">promo code:</label>
    <input type="text" name="promo" id="promo"><br><br>
    <label for="delivery">delivery mode:</label>
    <select name="delivery" id="delivery">
        <option value="standard">standard</option>
        <option value="express">express</option>
    </select><br><br>
    <input type="submit" value="calculate">
    </fieldset>
</form>


</body>
</html>

<?php
if(isset($_SESSION['priceERR'])){
    echo $_SESSION['priceERR'] . "<br>";
    unset($_SESSION['priceERR']);
}
if(isset($_SESSION['amountERR'])){
    echo $_SESSION['amountERR'];
    unset($_SESSION['amountERR']);
}
?>
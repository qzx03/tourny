<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <form action="handler.php" method="POST">
        <fieldset>
            <label for="WD">Amount to withdraw</label>
            <input type="number" name="WD" id="WD"><br><br>
            <input type="checkbox" name="Y50" id="Y50">
            <label for="Y50">Withdraw 50DH bills</label><br><br>
            <input type="submit" value="Withdraw" name="submit">
        </fieldset>
    </form>



</body>
</html>


<?php
session_start();
if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}


?>
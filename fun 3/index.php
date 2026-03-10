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
        <fieldset>
            <label for="DC">Departure city:</label>
            <select name="DC" id="DC">
                <option value="Casablanca">Casablanca</option>
                <option value="Rabat">Rabat</option>
                <option value="Tangier">Tangier</option>
            </select><br><br>
            <label for="AC">Arrival city:</label>
            <select name="AC" id="AC">
                <option value="Casablanca">Casablanca</option>
                <option value="Rabat">Rabat</option>
                <option value="Tangier">Tangier</option>
            </select><br><br>
       
                <label for="ST">Shipping type:</label><br>  
            <input type="radio" name="ST" id="Standard" checked><label for="Standard" >Standard</label><br>
            <input type="radio" name="ST" id="Express"><label for="Express">Express</label><br><br>

            <label for="weight">weight(kg):</label>
            <input type="number" name="weight" id="weight"><br><br>
            <input type="submit" name="submit">

           


        </fieldset>
    </form>



</body>
</html>

<?php
if(isset($_SESSION['noWEIGHT'])){
    echo $_SESSION['noWEIGHT']; 
    unset($_SESSION['noWEIGHT']);
}
?>
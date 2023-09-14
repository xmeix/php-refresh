<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="post">
        <input type="radio" name="credit_card" value="Visa"> Visa <br>
        <input type="radio" name="credit_card" value="Mastercard"> Mastercard <br>
        <input type="radio" name="credit_card" value="American Express"> American Express <br>
        <input type="submit" name="confirm" value="confirm">
    </form>  -->
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza"> Pizza <br>
        <input type="checkbox" name="foods[]" value="Burger"> Burger <br>
        <input type="checkbox" name="foods[]" value="Tacos"> Tacos <br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php 

    if(isset($_POST['confirm']))
    {
        if(isset($_POST['foods'])){
            $foods = $_POST['foods'];
            foreach ($foods as $food )  echo "{$food }<br>";
        }else echo "no food selected";
    }
    // if(isset($_POST['confirm']))
    // {    
        
    //     if(!empty($_POST['credit_card'])){
    //         $credit_card = $_POST['credit_card'];
    //         if($credit_card=="Visa" || $credit_card=="Mastercard" || $credit_card=="American Express" ){
    //             echo "You selected {$credit_card}";
    //         }else echo "this is not a valid credit card";
    //     }else echo "No credit card applied";

        
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
error_reporting(E_ERROR | E_PARSE);
class Chef {
    function makeChicken(){
        echo "The chef makes chicken<br>";
    }

    function makeSalad(){
        echo "The chef makes salad<br>";
    }

    function makeSpecialDish(){
        echo "The chef makes bbq ribs <br>";
    }
}
class ItalianChef extends Chef{
    function makeSpecialDish(){
        echo "The chef maeks pastaaa";
    }
}

$chef = new Chef();
$chef->makeSpecialDish();

$italianChef = new ItalianChef();
$italianChef->makeSpecialDish();

?>
    
</body>
</html>

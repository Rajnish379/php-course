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
function sayHi($name,$age){
    echo "Hello $name , you are $age <br>";
}
sayHi("Jake",10);
sayHi("Katie",20);
sayHi("Shyam",30)


?>
    
</body>
</html>
